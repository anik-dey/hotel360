<?php

namespace App\Http\Controllers\Configuration\master;

use App\Http\Controllers\Controller;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\master\PayMethod;
use App\Http\Requests\Master\PaymentMethodRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PayMethodController extends Controller
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
        $data['pay_method']    = PayMethod::with('property:id,name')->whereIn('property_id', $mapping)->paginate(10);
        return view('modules.configuration.master.payMethod',$data);
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
    public function store(PaymentMethodRequest $request)
    {
        try {
            $pay_method        = new PayMethod();
            $fillableData = $request->only($pay_method->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $pay_method->fill($fillableData)->save();
            toastr()->success("Successfully Payment Method Save");
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
        try{
            $status=PayMethod::select(['status'])->where('id',$id)->first();
            $status = $status->status;
            if($status==1)
            {
                $data['status']=0;
                $data['updated_time']=Carbon::now();
                $data['updated_by']=Auth()->user()->name;
              PayMethod::where('id',$id)->update($data);
              toastr()->success("Successfully Status Update");
                return back();
            }
            else{
                $data['status']=1;
                $data['updated_time']=Carbon::now();
                $data['updated_by']=Auth()->user()->name;
                PayMethod::where('id',$id)->update($data);
                toastr()->success("Successfully Status Update");
                return back();
            }
        } catch(\Exception$e){
            toastr()->error('Data Not Updated', $e->getMessage());
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
    public function update(Request $request, $id)
    {

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
            PayMethod::where('id',$id)->update($data);
            PayMethod::where('id', $id)->delete();
            toastr()->success("Successfully Payment Method Delete");
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
            $data['pay_method']    = PayMethod::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.master.deleted_item.deletedPayMethod',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            PayMethod::where('id',$id)
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
            PayMethod::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
