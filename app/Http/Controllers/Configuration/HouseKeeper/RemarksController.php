<?php

namespace App\Http\Controllers\Configuration\HouseKeeper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\HouseKeeping\RemarksRequest;
use App\Models\Configuration\HouseKeeper\Remarks;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RemarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $mapping                = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['title']          = "Status";
        $data['remarks']        = Remarks::whereIn('property_id', $mapping)->get();
        $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        return view('modules.configuration.house_keeping.remarks', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemarksRequest $request){
        try {
            $remarks        = new Remarks();
            $fillableData   = $request->only($remarks->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $remarks->fill($fillableData)->save();
            toastr()->success('Remarks Save Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Saved', $e->getMessage());
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
    public function update(RemarksRequest $request, $id){
        try {
            $remarks        = Remarks::find($id);
            $fillableData   = $request->only($remarks->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $remarks->fill($fillableData)->save();
            toastr()->success('Remarks Update Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Update', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data['deleted_by']=Auth()->user()->name;
            Remarks::where('id',$id)->update($data);
            Remarks::find($id)->delete();
            toastr()->success('Remarks Delete Successfull');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Delete', $e->getMessage());
            return back();
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['remarks'] = Remarks::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.house_keeping.deleted_item.deletedRemarks',$data);
        }catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Remarks::where('id',$id)
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
            Remarks::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
