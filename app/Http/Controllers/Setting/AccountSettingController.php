<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Human_Resource\Employee;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['breadcrumbs'] = [
            ['link' => "app/account-settings", 'name' => "Account Settings"], ['name' => "index"],
        ];
       $data['employee']=User::with('employees:id,employee_name,mobile_number,profile_pic,address,dob,father_name,mother_name,nid,joining_date,designation')->where('id',Auth()->user()->id)->first();
       return view('modules.account_setting.accountView',$data);
    }

    public function file_upload(Request $request)
    {
        $validator = $request->validate([
            'profile_pic'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000'
        ]);
        try {
            $file     = $request->file('profile_pic');
            $Name     = $file->getClientOriginalName();
            $fileName = time() . '.' . $Name;
            $file->move(public_path('employee_picture'), $fileName);
            $value['profile_pic']=$fileName;
            $employee=User::select(['employee_id'])->with('employees:id,profile_pic')->where('id',Auth()->user()->id)->first();
            Employee::where('id',$employee->employees->id)->update($value);

            //Previous Profile Picture Deleting
            $path =  public_path('/employee_picture/');
            $filePath = $path . $employee->employees->profile_pic;
            File::delete($filePath);
            toastr()->success("Successfully Updated");
            return redirect()->back();

        } catch (\Exception$e) {
            toastr()->error('Data Not Updated', $e->getMessage());
            return redirect()->back();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if (User::where('id','!=',Auth()->user()->id)->where('username',$request->username)->count() > 0)
            {
                toastr()->error('username must be unique');
                return redirect()->back();
            }
            if (User::where('id','!=',Auth()->user()->id)->where('email',$request->email)->count() > 0)
            {
                toastr()->error('email must be unique');
                return redirect()->back();
            }
            else{
                $user['username']=$request->username;
                $user['email']=$request->email;
                $employee['employee_name']=$request->employee_name;
                $employee['mobile_number']=$request->mobile_number;

                //Employee Table Update Employee Data
                $employee_id=User::select(['employee_id'])->where('id',Auth()->user()->id)->first();
                Employee::where('id',$employee_id->employee_id)->update($employee);

                //User Table Update Employee Data
                User::where('id',Auth()->user()->id)->update($user);
                toastr()->success("Successfully Updated");
                return redirect()->back();
            }
        } catch(\Exception$e){
            toastr()->error('Data Not Updated', $e->getMessage());
            return redirect()->back();
        }
    }

    public function fetchUsername(Request $request)
    {
        if (User::where('username',$request->username)->where('id','!=',Auth()->user()->id)->count() > 0) {
            $data['username']="username must be unique";
            return response()->json($data);
         }
         else{
            $data['username']="";
            return response()->json($data);
         }
    }

    public function fetchEmail(Request $request)
    {
        if (User::where('email',$request->email)->where('id','!=',Auth()->user()->id)->count() > 0) {
            $data['email']="email must be unique";
            return response()->json($data);
         }
         else{
            $data['email']="";
            return response()->json($data);
         }
    }

    public function password(Request $request)
    {
        $validator = $request->validate([
            'old_password' =>'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6'
        ]);

      try{
          $password=User::select(['password'])->find( Auth()->user()->id);
          if (Hash::check($request->old_password, $password->password))
          {
            $data['password']= Hash::make($request->password);
            User::where('id',Auth()->user()->id)->update($data);
            toastr()->success("Successfully Updated");
                return redirect()->back();
          }
          else{
            toastr()->error("Password does not match");
            return redirect()->back();
          }
      } catch(\Exception$e){
        toastr()->error('Data Not Updated', $e->getMessage());
        return redirect()->back();
      }
    }

    public function info(Request $request)
    {
      try{
          $employee=User::select(['employee_id'])->where('id',Auth()->user()->id)->first();
        $employee                       =  Employee::find($employee->employee_id);
        $fillableData                   = $request->only($employee->getFillable());
        $employee->fill($fillableData)->save();
         toastr()->success("Successfully Updated");
         return redirect()->back();
      } catch(\Exception$e){
        toastr()->error('Data Not Updated', $e->getMessage());
        return redirect()->back();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
