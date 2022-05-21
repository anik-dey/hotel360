<?php

namespace App\Http\Controllers\Configuration\CommonSettings;

use App\Http\Controllers\Controller;
use App\Models\Configuration\CommonSettings\CommonSetting;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;

class CommonSettingsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mapping          = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['title']    = 'Common Settings';
        return view('modules.configuration.common_settings.propertySelect', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $common_setting = new CommonSetting();
            $fillableData   = $request->only($common_setting->getFillable());
            CommonSetting::where('property_id', $request->property_id)->update($fillableData);
            toastr()->success('Update Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Update', $e->getMessage());
            return back()->withInput();
        }
    }

    public function show_data($property_id) {
        try {
            $data['common_settings'] = CommonSetting::where('property_id', $property_id)->first();
            $mapping                 = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
            $data['property']        = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['title']           = 'Common Settings';
            return view('modules.configuration.common_settings.commonSettings', $data);
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Update', $e->getMessage());
            return back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
