<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Guest\Wakeup;
use App\Http\Requests\Guest\WakeupRequest;
use Illuminate\Http\Request;

class WakeUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link' => "wakeup-list", 'name' => "Wakeup List"], ['name' => "index"],
        ];
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['wakeup']    = Wakeup::whereIn('property_id', $mapping)->where('is_public','1')->orWhere(function($query)
        {
            $query->where('user_id', Auth()->user()->id)
                  ->where('is_public', '0');
        })->orderBy('date','ASC')->paginate(10);
        return view('modules.guest.wakeupList', ['breadcrumbs' => $breadcrumbs],$data);
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
    public function store(WakeupRequest $request)
    {
        try {
            $wakeup        = new Wakeup();
            $fillableData = $request->only($wakeup->getFillable());
            $fillableData['user_id']=Auth()->user()->id;
            $wakeup->fill($fillableData)->save();
            toastr()->success("Successfully Data Save");
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
       $status=Wakeup::where('id',$id)->pluck('status');
        if($status[0]=='0')
        {
            $data['status'] = '1';
            Wakeup::where('id', $id)->update($data);
            toastr()->success("Successfully Updated");
            return redirect()->back();
        }
        else{
            $data['status'] = '0';
            Wakeup::where('id', $id)->update($data);
            toastr()->success("Successfully Updated");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WakeupRequest $request, $id)
    {
        try {
            $wakeup        = Wakeup::find($id);
            $fillableData = $request->only($wakeup->getFillable());
            $fillableData['user_id']=Auth()->user()->id;
            $wakeup->fill($fillableData)->save();
            toastr()->success("Successfully Data Update");
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
            Wakeup::where('id', $id)->delete();
            toastr()->success("Successfully Delete");
            return back();
        } catch (\Exception$e) {
            toastr()->error("Data Not Delete");
            return back();
        }
    }
}
