<?php

namespace App\Http\Controllers\Configuration\HouseKeeper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\HouseKeeping\UnitRequest;
use App\Models\Configuration\HouseKeeper\Unit;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['title']          = "Unit List";
        $data['unit']     = Unit::whereIn('property_id', $mapping)->get();
        $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        return view('modules.configuration.house_keeping.unit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitRequest $request){
        try {
            $unit = new Unit();
            $fillabelData = $request->only($unit->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $unit->fill($fillabelData)->save();
            toastr()->success('Unit Add Successful');
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
    public function update(UnitRequest $request, $id){
        try {
            $unit =Unit::find($id);
            $fillabelData = $request->only($unit->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $unit->fill($fillabelData)->save();
            toastr()->success('Unit Update Successful');
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
            $data['deleted_by']=Auth()->user()->name;
            Unit::where('id',$id)->update($data);
            Unit::find($id)->delete();
            toastr()->success('Unit Delete Succesful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Delete', $e->getMessage());
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['unit'] = Unit::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.house_keeping.deleted_item.deletedUnit',$data);
        }catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Unit::where('id',$id)
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
            Unit::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
