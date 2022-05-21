<?php

namespace App\Http\Controllers\Configuration\HouseKeeper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\HouseKeeping\StatusRequest;
use App\Models\Configuration\HouseKeeper\Status;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatusController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mapping          = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['title']    = "Status";
        $data['status']   = Status::whereIn('property_id', $mapping)->get();
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        return view('modules.configuration.house_keeping.status', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request) {
        try {
            $status       = new Status();
            $fillableData = $request->only($status->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $status->fill($fillableData)->save();
            toastr()->success('Status Save Successful');
            return back();
        } catch (\Exception$e) {
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
    public function update(StatusRequest $request, $id) {
        try {
            $status       = Status::find($id);
            $fillableData = $request->only($status->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $status->fill($fillableData)->save();
            toastr()->success('Status Update Successful');
            return back();
        } catch (\Exception$e) {
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
    public function destroy($id) {
        try {
            $data['deleted_by']=Auth()->user()->name;
            Status::where('id',$id)->update($data);
            Status::find($id)->delete();
            toastr()->success('Status Delete Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Can Not Delete', $e->getMessage());
            return back();
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['status'] = Status::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.house_keeping.deleted_item.deletedStatus',$data);
        }catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Status::where('id',$id)
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
            Status::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
