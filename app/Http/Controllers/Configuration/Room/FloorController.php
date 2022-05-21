<?php

namespace App\Http\Controllers\configuration\room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Room\FloorRequest;
use App\Models\Configuration\Property;
use App\Models\Configuration\room\Floor;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FloorController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $property = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $floor    = Floor::whereIn('property_id', $mapping)->paginate(10);
        return view('modules.configuration.room_setting.floorList', compact('property', 'floor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request) {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(FloorRequest $request) {

        try {
            $floor        = new Floor();
            $fillableData = $request->only($floor->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $floor->fill($fillableData)->save();
            toastr()->success("Successfully Floor Save");
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Not Saved', $e->getMessage());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $property = Property::select(['id', 'name'])->where('user_id', Auth()->user()->id)->get();
        $floor    = Floor::all();
        return view('modules.configuration.room_setting.floorList', compact('property', 'floor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FloorRequest $request, $id) {
        try {
            $floor        = Floor::find($id);
            $fillableData = $request->only($floor->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $floor->fill($fillableData)->save();
            toastr()->success("Successfully Floor Update");
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Not Saved', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            $data['deleted_by']=Auth()->user()->name;
            Floor::where('id',$id)->update($data);
            Floor::where('id', $id)->delete();
            toastr()->success("Successfully Floor Delete");
            return back();
        } catch (\Exception$e) {
            toastr()->error("Data Not Delete");
            return back();
        }
    }

    public function floor_plan_list() {
        $property = Property::all();
        return view('modules.configuration.room_setting.floorPlanList', compact('property'));
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['floor']    = Floor::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.room_setting.deleted_item.deletedFloorList',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Floor::where('id',$id)
            ->restore();
            toastr()->success("Successfully Restore ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not restore");
            return back();
        }
    }

    public function force_delete_item($id)
    {
        try{
            Floor::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
