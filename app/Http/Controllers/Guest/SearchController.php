<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\Guest;
use App\Models\Common\Country;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\CommonSettings\CommonSetting;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_result(Request $request)
    {
        if($request->search_value)
        {
            if($request->search_type=="phone")
            {
              $result=Guest::where('phone',$request->search_value)->orderBy('id','DESC')->first();
               if($result)
               {
                return view('modules.guest.newClient',$this->setdata(),compact('result'));
               }
               else{
                   $result='';
                   toastr()->warning("No data found");
                return view('modules.guest.newClient',$this->setdata(),compact('result'));
               }
            }
            elseif($request->search_type=="nid")
            {
                $result=Guest::where('nid',$request->search_value)->orderBy('id','DESC')->first();
                if($result)
               {
                return view('modules.guest.newClient',$this->setdata(),compact('result'));
               }
               else{
                   $result='';
                   toastr()->warning("No data found");
                return view('modules.guest.newClient',$this->setdata(),compact('result'));
               }

            }
            else{
                toastr()->warning("Serach not working something went worng");
                return redirect()->back();
            }
        }
        else{
            toastr()->warning("Please enter phone or nid number for serach");
            return redirect()->back();
        }
    }

    public function setdata()
    {
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['setting']=CommonSetting::whereIn('property_id', $mapping)->first();
        $data['country'] = Country::all();
        $data['email']="";
        $data['breadcrumbs'] = [
            ['link' => "guest", 'name' => "Guest List"],['link' => "check-client", 'name' => "Check Guest"], ['link' => "guest/create", 'name' => "New Guest"], ['name' => "index"],
        ];
        return $data;
    }
}
