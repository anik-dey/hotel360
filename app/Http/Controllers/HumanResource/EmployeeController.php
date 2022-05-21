<?php

namespace App\Http\Controllers\HumanResource;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Configuration\Property;
use App\Models\Human_Resource\Employee;
use App\Http\Requests\User\UserRegisterRequest;

class EmployeeController extends Controller {
    public function hr_employee_list() {
        try {
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $employee    = Employee::with('properties:id,name')->select(['id', 'property_id', 'joining_date', 'employee_name', 'designation', 'mobile_number', 'basic_salary', 'employee_status','profile_pic','panel'])->whereIn('property_id', $mapping)->orderBy('employee_name', 'ASC')->get();
            $breadcrumbs = [
                ['link' => "app/employee-list", 'name' => "Employee List"], ['name' => "index"],
            ];
            return view('modules.human_resource.employeeList', ['breadcrumbs' => $breadcrumbs], compact('employee'));
        } catch (\Exception$e) {
            toastr()->error('Something Went Wrong', $e->getMessage());
            return back()->withInput();
        }

    }
    public function hr_new_employee(Request $request) {
        if ($request->method() == 'GET') {
            $property    = Property::select(['id', 'name'])->where('user_id', Auth()->user()->id)->get();
            $breadcrumbs = [
                ['link' => "app/new-employee", 'name' => "New Employee"], ['name' => "index"],
            ];
            return view('modules.human_resource.newEmployee', ['breadcrumbs' => $breadcrumbs], compact('property'));
        }
        if ($request->method() == 'POST') {

            if ($request->profile_pic != '' && $request->signature == '') {
                try {
                    $validator = $request->validate([
                        'employee_name'   => 'required',
                        'employee_status' => 'required',
                        'gender'          => 'required',
                        'mobile_number'   => 'required',
                        'property_id'     => 'required',
                        'profile_pic'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                    ]);

                    $file     = $request->file('profile_pic');
                    $Name     = $file->getClientOriginalName();
                    $fileName = time() . '.' . $Name;
                    $file->move(public_path('employee_picture'), $fileName);
                    $employee                       = new Employee();
                    $fillableData                   = $request->only($employee->getFillable());
                    $fillableData['profile_pic']    = $fileName;
                    $fillableData['user_id']        = Auth()->user()->id;
                    $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                    $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                    $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                    $employee->fill($fillableData)->save();
                    toastr()->success("Successfully Employee Save");
                    return back();
                } catch (\Exception$e) {
                    toastr()->error('Data Not Saved', $e->getMessage());
                    return back()->withInput();
                }
            }
            if ($request->signature != '' && $request->profile_pic == '') {
                try {

                    $validator = $request->validate([
                        'employee_name'   => 'required',
                        'employee_status' => 'required',
                        'gender'          => 'required',
                        'mobile_number'   => 'required',
                        'property_id'     => 'required',
                        'signature'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                    ]);
                    $file     = $request->file('signature');
                    $Name     = $file->getClientOriginalName();
                    $fileName = time() . '.' . $Name;
                    $file->move(public_path('employee_signature'), $fileName);
                    $employee                       = new Employee();
                    $fillableData                   = $request->only($employee->getFillable());
                    $fillableData['signature']      = $fileName;
                    $fillableData['user_id']        = Auth()->user()->id;
                    $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                    $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                    $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                    $employee->fill($fillableData)->save();
                    toastr()->success("Successfully Employee Save");
                    return back();
                } catch (\Exception$e) {
                    toastr()->error('Data Not Saved', $e->getMessage());
                    return back()->withInput();
                }
            }
            if ($request->profile_pic != '' && $request->signature != '') {
                try {
                    $validator = $request->validate([
                        'employee_name'   => 'required',
                        'employee_status' => 'required',
                        'gender'          => 'required',
                        'mobile_number'   => 'required',
                        'property_id'     => 'required',
                        'profile_pic'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                        'signature'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                    ]);
                    $file     = $request->file('profile_pic');
                    $Name     = $file->getClientOriginalName();
                    $fileName = time() . '.' . $Name;
                    $file->move(public_path('employee_picture'), $fileName);

                    $file1     = $request->file('signature');
                    $Name1     = $file1->getClientOriginalName();
                    $fileName1 = time() . '.' . $Name1;
                    $file1->move(public_path('employee_signature'), $fileName1);
                    $employee                       = new Employee();
                    $fillableData                   = $request->only($employee->getFillable());
                    $fillableData['profile_pic']    = $fileName;
                    $fillableData['signature']      = $fileName1;
                    $fillableData['user_id']        = Auth()->user()->id;
                    $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                    $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                    $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                    $employee->fill($fillableData)->save();
                    toastr()->success("Successfully Employee Save");
                    return back();
                } catch (\Exception$e) {
                    toastr()->error('Data Not Saved', $e->getMessage());
                    return back()->withInput();
                }
            } else {
                try {
                    $validator = $request->validate([
                        'employee_name'   => 'required',
                        'employee_status' => 'required',
                        'gender'          => 'required',
                        'mobile_number'   => 'required',
                        'property_id'     => 'required',
                    ]);
                    $employee                       = new Employee();
                    $fillableData                   = $request->only($employee->getFillable());
                    $fillableData['user_id']        = Auth()->user()->id;
                    $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                    $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                    $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                    $employee->fill($fillableData)->save();
                    toastr()->success("Successfully Employee Save");
                    return back();

                } catch (\Exception$e) {
                    toastr()->error('Data Not Saved', $e->getMessage());
                    return back()->withInput();
                }
            }

        }
    }

    public function employee_delete($id)
    {
        try {
            Employee::where('id',$id)->delete();
            toastr()->success("Successfully Employee Delete");
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Not Dalete', $e->getMessage());
            return back();
        }
    }

    public function employee_update( Request $request)
    {
        try{
                $property    = Property::select(['id', 'name'])->where('user_id', Auth()->user()->id)->get();
                $employee    = Employee::with('properties:id')->where('id', $request->id)->first();
                $breadcrumbs = [
                    ['link' => "app/new-employee", 'name' => "New Employee"], ['name' => "index"],
                ];
                return view('modules.human_resource.editEmployee', ['breadcrumbs' => $breadcrumbs], compact('employee','property'));
        } catch(\Exception$e){
            toastr()->error('Something Went Wrong', $e->getMessage());
            return back();
        }
    }

    public function employee_update_store(Request $request)
    {
        if ($request->profile_pic != '' && $request->signature == '') {
            try {
                $validator = $request->validate([
                    'employee_name'   => 'required',
                    'employee_status' => 'required',
                    'gender'          => 'required',
                    'mobile_number'   => 'required',
                    'property_id'     => 'required',
                    'profile_pic'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                ]);
                $file     = $request->file('profile_pic');
                $Name     = $file->getClientOriginalName();
                $fileName = time() . '.' . $Name;
                $file->move(public_path('employee_picture'), $fileName);
                $employee                       =  Employee::find($request->id);
                $fillableData                   = $request->only($employee->getFillable());
                $fillableData['profile_pic']    = $fileName;
                $fillableData['user_id']        = Auth()->user()->id;
                $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                $employee->fill($fillableData)->save();
                toastr()->success("Successfully Employee Update");
                return redirect('app/employee-list');
            } catch (\Exception$e) {
                toastr()->error('Data Not Updated', $e->getMessage());
                return redirect('app/employee-list');
            }
        }
        if ($request->signature != '' && $request->profile_pic == '') {
            try {

                $validator = $request->validate([
                    'employee_name'   => 'required',
                    'employee_status' => 'required',
                    'gender'          => 'required',
                    'mobile_number'   => 'required',
                    'property_id'     => 'required',
                    'signature'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                ]);
                $file     = $request->file('signature');
                $Name     = $file->getClientOriginalName();
                $fileName = time() . '.' . $Name;
                $file->move(public_path('employee_signature'), $fileName);
                $employee                       =  Employee::find($request->id);
                $fillableData                   = $request->only($employee->getFillable());
                $fillableData['signature']      = $fileName;
                $fillableData['user_id']        = Auth()->user()->id;
                $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                $employee->fill($fillableData)->save();
                toastr()->success("Successfully Employee Update");
                return redirect('app/employee-list');
            } catch (\Exception$e) {
                toastr()->error('Data Not Updated', $e->getMessage());
                return redirect('app/employee-list');
            }
        }
        if ($request->profile_pic != '' && $request->signature != '') {
            try {
                $validator = $request->validate([
                    'employee_name'   => 'required',
                    'employee_status' => 'required',
                    'gender'          => 'required',
                    'mobile_number'   => 'required',
                    'property_id'     => 'required',
                    'profile_pic'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                    'signature'       => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
                ]);
                $file     = $request->file('profile_pic');
                $Name     = $file->getClientOriginalName();
                $fileName = time() . '.' . $Name;
                $file->move(public_path('employee_picture'), $fileName);

                $file1     = $request->file('signature');
                $Name1     = $file1->getClientOriginalName();
                $fileName1 = time() . '.' . $Name1;
                $file1->move(public_path('employee_signature'), $fileName1);
                $employee                       =  Employee::find($request->id);
                $fillableData                   = $request->only($employee->getFillable());
                $fillableData['profile_pic']    = $fileName;
                $fillableData['signature']      = $fileName1;
                $fillableData['user_id']        = Auth()->user()->id;
                $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                $employee->fill($fillableData)->save();
                toastr()->success("Successfully Employee Update");
                return redirect('app/employee-list');
            } catch (\Exception$e) {
                toastr()->error('Data Not Updated', $e->getMessage());
                return redirect('app/employee-list');
            }
        } else {
            try {
                $validator = $request->validate([
                    'employee_name'   => 'required',
                    'employee_status' => 'required',
                    'gender'          => 'required',
                    'mobile_number'   => 'required',
                    'property_id'     => 'required',
                ]);
                $employee                       = Employee::find($request->id);
                $fillableData                   = $request->only($employee->getFillable());
                $fillableData['user_id']        = Auth()->user()->id;
                $fillableData['joining_date']   = Carbon::parse($request->joining_date)->toDateTimeString();
                $fillableData['dob']            = Carbon::parse($request->dob)->toDateTimeString();
                $fillableData['interview_date'] = Carbon::parse($request->interview_date)->toDateTimeString();
                $employee->fill($fillableData)->save();
                toastr()->success("Successfully Employee Update");
                return redirect('app/employee-list');

            } catch (\Exception$e) {
                toastr()->error('Data Not Updated', $e->getMessage());
                return redirect('app/employee-list');
            }
        }
    }

    //User Create Function
    Public function create_user($employee_id)
    {
        try{
            $employee_info    = Employee::select(['id','property_id', 'employee_name','mobile_number'])->where('id',$employee_id)->first();
            $breadcrumbs = [
                ['link' => "app/employee-list", 'name' => "Employee List"], ['link' => "app/panel/user", 'name' => "Create User"], ['name' => "index"],
            ];
            return view('modules.human_resource.userCreate', ['breadcrumbs' => $breadcrumbs],compact('employee_info'));
        } catch(\Exception$e){
            toastr()->error('Something Went Wrong', $e->getMessage());
            return redirect()->back();
        }

    }

    public function store_user(UserRegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user                    = new User();
            $fillData                = $request->only($user->getFillable());
            $fillData['is_verified'] = 1;
            $fillData['user_id'] = Auth()->user()->id;
            $fillData['password']    = bcrypt($request->password);
            $user->fill($fillData)->save();
            $data['panel']=$request->username;
            Employee::where('id',$request->employee_id)->update($data);

            //Mapping Table Work
            $property_id=Employee::select(['property_id'])->where('id',$request->employee_id)->first();
            $user_id=User::select(['id'])->latest()->First();
            $data=array();
            $property_id=$property_id->property_id;
            $user_id=$user_id->id;
            $data['property_id']=$property_id;
            $data['user_id']=$user_id;
            Mapping::insert($data);
            DB::commit();
            toastr()->success("Successfully User Create");
            return redirect('app/employee-list');

        } catch (\Exception$e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }

    }
}
