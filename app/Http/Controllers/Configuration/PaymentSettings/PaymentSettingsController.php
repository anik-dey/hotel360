<?php

namespace App\Http\Controllers\Configuration\PaymentSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\PaymentSettings\PaymentSettingsRequest;
use App\Models\Configuration\PaymentSettings\PaymentSetting;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PaymentSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data['title'] = 'Payment Settings';
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['paymentSetting']     = PaymentSetting::whereIn('property_id', $mapping)->get();
        $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        return view('modules.configuration.payment-settings.paymentSettings', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentSettingsRequest $request){
        try {
            $paymentSettings = new PaymentSetting();
            $fillableData = $request->only($paymentSettings->getFillable());
            $fillableData['password'] = Hash::make('password');
            $fillableData['created_by']=Auth()->user()->name;
            $paymentSettings->fill($fillableData)->save();
            toastr()->success('Payment Settings Add Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Not Save', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentSettingsRequest $request, $id){
        try {
            $paymentSettings = PaymentSetting::find($id);
            $fillableData = $request->only($paymentSettings->getFillable());
            $fillableData['password'] = Hash::make('password');
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $paymentSettings->fill($fillableData)->save();
            toastr()->success('Payment Settings Update Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Not Update', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        try {
            PaymentSetting::find($id)->delete();
            toastr()->success('Payment Delete Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Delete', $e->getMessage());
            return back();
        }
    }
}
