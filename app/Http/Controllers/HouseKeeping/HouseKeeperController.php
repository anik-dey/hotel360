<?php

namespace App\Http\Controllers\HouseKeeping;

use App\Http\Controllers\Controller;
use App\Models\HouseKeeping\HouseKeeper;
use App\Models\Human_Resource\Employee;
use App\Models\Mapping;
use Illuminate\Http\Request;

class HouseKeeperController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['title']       = 'House Keeper';
        $mapping             = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['employee']    = Employee::whereIn('property_id', $mapping)->get();
        $employees           = HouseKeeper::pluck('employee_id');
        $data['housekeeper'] = Employee::with('properties:id,name')->select('id', 'employee_name', 'mobile_number', 'property_id')->whereIn('id', $employees)->get();
        $data['breadcrumbs'] = [
            ['link' => "house-keeper", 'name' => "House-keeper"],
            ['name' => "index"],
        ];

        return view('modules.house_keeping.houseKeeper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $houseKeeper      = new HouseKeeper();
            $data['employee'] = Employee::where('id', $request->employee_id)->first();
            $fillableData     = $request->only($houseKeeper->getFillable());
            $houseKeeper->fill($fillableData)->save();
            toastr()->success('House Keeper Save Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Save', $e->getMessage());
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
    public function update(Request $request, $id) {
        try {
            $houseKeeper  = HouseKeeper::find($id);
            $fillableData = $request->only($houseKeeper->getFillable());
            $houseKeeper->fill($fillableData)->update();
            toastr()->success('House Keeper Update Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Update', $e->getMessage());
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
            HouseKeeper::find($id)->delete();
            toastr()->success('House Keeper Delete Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Delete', $e->getMessage());
            return back();
        }
    }

    public function houseKeeperUpdate($id) {
        try {
            $status = HouseKeeper::select('status')->where('id', $id)->first();
            // dd($status);
            $status = $status->status;
            if ($status == 1) {
                $data['status'] = 0;
                HouseKeeper::where('id', $id)->update($data);
                toastr()->success('House Keeper Update Successful');
                return redirect()->back();
            } else {
                $data['status'] = 1;
                HouseKeeper::where('id', $id)->update($data);
                toastr()->success('House Keeper Update Successful');
                return redirect()->back();
            }
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Update', $e->getMessage());
        }
    }
}
