<?php

namespace App\Http\Controllers\Configuration\Master;

use App\Http\Controllers\Controller;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\master\ReservasionType;
use App\Http\Requests\Master\ReservasionTypeRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservasionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['reservation']    = ReservasionType::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('name','ASC')->paginate(10);
        return view('modules.configuration.master.reservationType',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservasionTypeRequest $request)
    {
        try {
            $reservasion        = new ReservasionType();
            $fillableData = $request->only($reservasion->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $reservasion->fill($fillableData)->save();
            toastr()->success("Successfully Reservasion Type Save");
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservasionTypeRequest $request, $id)
    {
        try {
            $reservasion        = ReservasionType::find($id);
            $fillableData = $request->only($reservasion->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $reservasion->fill($fillableData)->save();
            toastr()->success("Successfully Reservation Type Update");
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
    public function destroy($id)
    {
        try {
            $data['deleted_by']=Auth()->user()->name;
            ReservasionType::where('id',$id)->update($data);
            ReservasionType::where('id', $id)->delete();
            toastr()->success("Successfully Reservasion Type Delete");
            return back();
        } catch (\Exception$e) {
            toastr()->error("Data Not Delete");
            return back();
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['reservation']    = ReservasionType::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.master.deleted_item.deletedResarvationType',$data);
        }catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            ReservasionType::where('id',$id)
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
            ReservasionType::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
