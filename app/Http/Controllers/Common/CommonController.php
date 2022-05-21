<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Common\Country;
use App\Models\Common\State;
use App\Models\Common\City;
use App\Models\Common\Thana;
use App\Models\Common\Verify;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\CommonSettings\CommonSetting;
// use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Carbon\Carbon;
use Mail;
use DB;
use Session;


class CommonController extends Controller
{
    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->orderBy('name','asc')->get(["name", "id", "bn_name"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->orderBy('name','asc')->get(["name", "id","bn_name"]);
        return response()->json($data);
    }
    public function fetchThana(Request $request)
    {
        $data['thanas'] = Thana::where("city_id",$request->city_id)->orderBy('name','asc')->get(["name", "id","bn_name"]);
        return response()->json($data);
    }

    public function verifyCodeShow(Request $request)
    {
        DB::beginTransaction();
        try{
            $data['email']=$request->email;
            $otp = rand(1000,9999);
            $mail_details = [
                'subject' => 'Email Verification',
                'body' => 'Your OTP is : '. $otp
            ];
            $insert['email']=$request->email;
            $insert['code']=$otp;
            $insert['created_at']=Carbon::now();
            $verify = Verify::create($insert);

            $user['to']=$request->email;
            Mail::send('mailTemplate.otpEmailTemplate',$mail_details,function($message) use ($user){
                $message->to($user['to']);
                $message->subject('Email Verification');
            });
            DB::commit();
            // $decriptId = Crypt::encrypt($verify->id);

            toastr()->success("Verification Code Send");
            return redirect()->route('verify-show',$request->email);
            // return back()->with(['email' => __($request->email)]);
        //    return redirect()->route('user-email-otp-verification', $decriptId);
        } Catch(\Exception$e){
            DB::rollback();
            toastr()->error('Something Went Wrong', $e->getMessage());
            return back()->withInput();
        }
    }

  public function verifyBladeShow($email)
  {
    return view('modules.guest.verifyCode',compact('email'));
  }

    public function otpCheck(Request $request)
    {
      try{
          $code=$request->input1.$request->input2.$request->input3.$request->input4;
          $code = Verify::where('email',$request->email)->whereCode($code)->orderBy('id','DESC')->first();
          if($code){
              Verify::where('email',$request->email)->delete();

            //Update Database

            toastr()->success("Verified");
            return redirect()->route('guest.index');
          }else{
            toastr()->error("Code do not match");
            return redirect()->route('verify-show',$request->email);
          }

        //   else{
        //     $data['email']=$request->email;
        //     toastr()->error('Invalid Code');
        //     return redirect()->back()->withInput($data);
        //   }

      } Catch(\Exception$e){
        toastr()->error('Something Went Wrong', $e->getMessage());
        return back()->withInput();
      }
    }

}
