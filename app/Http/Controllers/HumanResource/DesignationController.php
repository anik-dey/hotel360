<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use App\Http\Requests\Human_Resource\DesignationRequest;
use App\Models\Configuration\Property;
use App\Models\Human_Resource\Department;
use App\Models\Human_Resource\Designation;
use App\Models\Mapping;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Carbon\Carbon;


class DesignationController extends Controller {


    private $designation;

    /**
     * Class constructor.
     */
    public function __construct() {
        $this->designation = new Designation();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
            $data['designation']     = Designation::whereIn('property_id', $mapping)->get();
            $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['title']        = 'Designations';
            $data['breadcrumbs']  = [['link' => "app/designation", 'name' => "Designation"], ['name' => "index"]];
            return view('modules.human_resource.designation', $data);
        } catch (\Throwable$th) {
            toastr($th->getMessage());
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignationRequest $request) {
        try {
            if(empty($request->id)){
                $designation = $this->designation;
            }else{
                $designation = $this->designation::findOrFail($request->id);
            }
            $filableData = $request->only($designation->getFillable());

            if(empty($request->id)){
                $fillableData['created_by']=Auth()->user()->name;
            }else{
                $fillableData['updated_time']=Carbon::now();
                $fillableData['updated_by']=Auth()->user()->name;
            }

            $designation->fill($filableData)->save();
            toastr()->success('Designation Save Successfully');
            return back();
        } catch (\Exception$e) {
            toastr()->error("Designation Not Save");
            return back();
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
            $department = Designation::find($id);
            $department->delete();
            toastr()->success('Designation Delete Succesfully');
            return back();
        } catch (\Exception$e) {
            toastr()->error("Designation Do Not Delete");
            return back();
        }
    }
}
