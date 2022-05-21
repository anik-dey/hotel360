<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use App\Models\Configuration\Property;
use App\Models\Human_Resource\Department;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DepartmentController extends Controller {

    private $department;

    /**
     * Class constructor.
     */
    public function __construct() {
        $this->department = new Department();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
            $data['title']          = "Department";
            $data['department']     = Department::whereIn('property_id', $mapping)->get();
            $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['datareadcrumbs'] = [
                ['link' => "app/department", 'name' => "Department"], ['name' => "index"],
            ];
            return view('modules.human_resource.department', $data);
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
    public function store(Request $request) {

        try {
            if (empty($request->id)) {
                $department = $this->department;
            } else {
                $department = $this->department::findOrFail($request->id);
            }
            $fillableData = $request->only($department->getFillable());

            if (empty($request->id)) {
                $fillableData['created_by']=Auth()->user()->name;
            } else {
                $fillableData['updated_time']=Carbon::now();
                $fillableData['updated_by']=Auth()->user()->name;
            }

            $department->fill($fillableData)->save();
            toastr()->success('Department Add Succesfully');
            return back();
        } catch (\Exception$e) {
            toastr()->error("Department Not Save");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department) {
        try {
            $department->delete();
            toastr()->success('Department Delete Succesfully');
            return back();
        } catch (\Exception$e) {
            toastr()->error("Department Do Not Delete");
            return back();
        }
    }
}
