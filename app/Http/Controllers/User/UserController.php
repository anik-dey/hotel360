<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\UserVerification;
use App\Service\SmsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    //Users
    public function all_users() {
        $users       = User::with('employees:id,designation,profile_pic')->select(['id', 'name', 'username', 'employee_id', 'status'])->where('user_id', Auth()->user()->id)->latest()->get();
        $breadcrumbs = [
            ['link' => "app/all-users", 'name' => "All Users"], ['name' => "index"]];
        return view('modules.users.all_users', ['breadcrumbs' => $breadcrumbs], compact('users'));
    }
    public function create_new() {
        $breadcrumbs = [
            ['link' => "app/create-new", 'name' => "Create New"], ['name' => "index"]];
        return view('modules.users.createNew', ['breadcrumbs' => $breadcrumbs]);
    }
    public function role_list() {
        $breadcrumbs = [
            ['link' => "app/role-list", 'name' => "Role List"], ['name' => "index"]];
        return view('modules.users.roleList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function permission_setup() {
        $breadcrumbs = [
            ['link' => "app/permission-setup", 'name' => "Permission Setup"], ['name' => "index"]];
        return view('modules.users.permissionSetup', ['breadcrumbs' => $breadcrumbs]);
    }

    public function all_users_pass_change(Request $request, $id) {
        try {
            $validator = $request->validate([
                'password' => 'required|min:6',
            ]);
            $data['password'] = bcrypt($request->password);
            User::where('id', $id)->update($data);
            toastr()->success("Successfully Password Updated");
            return redirect()->back();
        } catch (\Exception$e) {
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    public function users_status_update($id) {
        try {
            $status = User::select(['status'])->where('id', $id)->first();
            $status = $status->status;
            if ($status == 1) {
                $data['status'] = '0';
                User::where('id', $id)->update($data);
                toastr()->success("Successfully Updated");
                return redirect()->back();
            } else {
                $data['status'] = 1;
                User::where('id', $id)->update($data);
                toastr()->success("Successfully Updated");
                return redirect()->back();
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    
}