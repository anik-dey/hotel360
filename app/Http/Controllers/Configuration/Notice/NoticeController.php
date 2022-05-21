<?php

namespace App\Http\Controllers\Configuration\Notice;

use App\Http\Controllers\Controller;
use App\Models\Configuration\Notice\Notice;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NoticeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $data['title']    = 'Notice';
            $mapping          = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
            $data['notice']   = Notice::whereIn('property_id', $mapping)->orderBy('id', 'DESC')->paginate(10);
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            return view('modules.configuration.notice.notice', $data);
        } catch (\Exception$e) {
            toastr()->error($e->getMessage());
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
            if ($request->start_date > $request->expire_date) {
                toastr()->error('expire date can not be small from start date');
                return back();
            } else {
                $notice       = new Notice();
                $fillableData = $request->only($notice->getFillable());
                $fillableData['created_by']=Auth()->user()->name;
                $notice->fill($fillableData)->save();
                toastr()->success('Notice Save Sucessfull');
                return back()->withInput();
            }
        } catch (\Throwable$e) {
            toastr()->error('Data Not Save', $e->getMessage());
            return back();
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
            if ($request->start_date > $request->expire_date) {
                toastr()->error('expire date can not be small from start date');
                return back();
            } else {
                $notice       = Notice::find($id);
                $fillableData = $request->only($notice->getFillable());
                $fillableData['updated_time']=Carbon::now();
                $fillableData['updated_by']=Auth()->user()->name;
                $notice->fill($fillableData)->save();
                toastr()->success('Notice Update Sucessfull');
                return back()->withInput();
            }
        } catch (\Throwable$e) {
            toastr()->error('Data Not Update', $e->getMessage());
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
            Notice::find($id)->delete();
            toastr()->success('Notice Delete Successfull');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data do not delete', $e->getMessage());
            return back();
        }
    }
}
