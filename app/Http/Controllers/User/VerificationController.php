<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\UserVerification;
use App\Service\SmsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public  function userVerificationForm(){
        $currentUser = Auth::user();
        if($currentUser->is_verified == 1){
            return redirect('home');
        }
        $codeSend = UserVerification::whereUserId($currentUser->id)->first();
        if(!empty($codeSend)){
            return redirect()->route('users.verify.your.account');
        }
        try {
            $data['title'] = "User Verification";
            $data['breadcrumbs'] = [
                ['link' => "app/permission-setup", 'name' => "Permission Setup"], ['name' => "index"]];
            return view('modules.users.verification', $data);
        } catch (\Throwable $th) {
            return back();
        }
    }

    public  function userVerificationCodeSend(Request $request){
        try {
            $currentUser = Auth::user();
            if($request->phone && $currentUser->phone != $request->phone){
                $currentUser->update([
                    'phone' => $request->phone
                ]);
            }
            
            $userVerification['user_id'] = $currentUser->id;
            $userVerification['code'] = rand(100000, 999999);
            $userVerification['type'] = 'phone';
            UserVerification::create($userVerification);

            $message = "Your verification code is ".$userVerification['code'].".do not share your pin";
            $sms = new SmsServices();
            $sms->sendSms($currentUser->phone, $message);
            toastr()->success("Successfully Verification code send");
            return redirect()->route('users.verify.your.account');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    public function userVerifyYourAccount(){
        try {
            $data['title'] = "Verify your Account";
            $data['breadcrumbs'] = [
                ['link' => "app/permission-setup", 'name' => "Permission Setup"], ['name' => "index"]];
            return view('modules.users.verifyYourAccount', $data);
        } catch (\Throwable $th) {
            return back();
        }
    }

    public function verifiedMyAccount(Request $request){
        try {
            $validated = $request->validate([
                'code.*' => 'required|numeric',
            ]);
            $currentUser = Auth::user();
            $code = implode('',$request->code);
            $userVerification = UserVerification::whereUserId($currentUser->id)->whereCode($code)->whereType('phone')->first();
            if($userVerification){
                $currentUser->update([
                    'is_verified' => 1
                ]);
                $userVerification->delete();
                toastr()->success("Successfully Verified Account");
                return redirect('home');
            }else{
                toastr()->error("Verification code doesnt match");
                return back();
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
        
    }

}
