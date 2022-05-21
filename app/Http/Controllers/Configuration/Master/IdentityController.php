<?php

namespace App\Http\Controllers\Configuration\Master;

use App\Http\Controllers\Controller;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\master\Identity;
use App\Http\Requests\Master\IdentityRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IdentityController extends Controller
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
        $data['identity']    = Identity::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('name','ASC')->paginate(10);
        return view('modules.configuration.master.identityType',$data);
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
    public function store(IdentityRequest $request)
    {
        try {
            $identity        = new Identity();
            $fillableData = $request->only($identity->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $identity->fill($fillableData)->save();
            toastr()->success("Successfully Identity Save");
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
    public function update(IdentityRequest $request, $id)
    {
        try {
            $identity        = Identity::find($id);
            $fillableData = $request->only($identity->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $identity->fill($fillableData)->save();
            toastr()->success("Successfully Identity Type Update");
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
            Identity::where('id',$id)->update($data);
            Identity::where('id', $id)->delete();
            toastr()->success("Successfully Identity Type Delete");
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
            $data['identity']    = Identity::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.master.deleted_item.deletedIdentityType',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Identity::where('id',$id)
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
            Identity::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
