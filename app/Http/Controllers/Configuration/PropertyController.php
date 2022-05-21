<?php

namespace App\Http\Controllers\Configuration;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Common\Country;
use App\Models\Common\Currency;
use App\Models\Mapping;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Configuration\Property;
use App\Models\Configuration\CommonSettings\CommonSetting;
use App\Http\Requests\Setting\PropertyRequest;

class PropertyController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['title']      = "Property list";
            $data['properties'] = Property::whereIn('id',$mapping)->latest()->paginate(10);
            $data['currencies'] = Currency::all();
            $data['countries']  = Country::with('states.cities.thanas')->get();
            return view('modules.configuration.property.index', $data);
        } catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request) {
        DB::beginTransaction();
        try {
            $property                   = new Property();
            $fillableData               = $request->only($property->getFillable());
            $fillableData['user_id']    = Auth::user()->id;
            $fillableData['start_date'] = Carbon::parse($request->start_date)->toDateTimeString();
            $property->fill($fillableData)->save();

            //Mappping Table Work
            $property_id=Property::select(['id'])->latest()->First();
            $data=array();
            $property_id=$property_id->id;
            $data['property_id']=$property_id;
            $data['user_id']=Auth()->user()->id;
            Mapping::insert($data);

            //Common Settings Table Defalut Data Insert
            $common_settings                   = new CommonSetting();
            $fillableData               = $request->only($common_settings->getFillable());
            $fillableData['property_id']=$property_id;
            $common_settings->fill($fillableData)->save();

            DB::commit();
            toastr()->success("Successfully Property Save");
            return back();
        } catch (\Exception$e) {
            DB::rollBack();
            toastr()->error("Data Not Saved");
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property) {
        try {
            $fillableData               = $request->only($property->getFillable());
            $fillableData['start_date'] = Carbon::parse($request->start_date)->toDateTimeString();
            $property->fill($fillableData)->save();
            toastr()->success("Successfully Property Updated");
            return back();
        } catch (\Exception$e) {
            toastr()->error("Data Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property) {
        try {
            $property->delete();
            toastr()->success("Successfully Property Delete");
            return back();
        } catch (\Exception$e) {
            toastr()->error("Data Not Delete");
            return back();
        }
    }
}
