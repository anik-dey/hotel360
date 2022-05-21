<?php

namespace App\Http\Controllers\Configuration\Room;

use App\Http\Controllers\Controller;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Configuration\room\Promocode;
use App\Http\Requests\Room\PromocodeRequest;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['promocode']    = Promocode::whereIn('property_id', $mapping)->orderBy('id','DESC')->paginate(10);
        return view('modules.configuration.room_setting.promocode',$data);
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
    public function store(PromocodeRequest $request)
    {
        try {
            //check date value is invalid
            if($request->start_date >= $request->end_date)
            {
                toastr()->error('End date must be bigger than start date');
                return back()->withInput();
            }

            //Is Same Name Promocode is exit
            $p=Promocode::where('property_id',$request->property_id)->whereDate('end_date', '>=' ,  \DB::raw('NOW()'))->where('room_type',$request->room_type)->where('code',$request->code)->count() > 0;
            if($p==true)
            {
                toastr()->error('Same promocode is running');
                return back()->withInput();
            }
            else{
                $promocode        = new Promocode();
            $fillableData = $request->only($promocode->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $promocode->fill($fillableData)->save();
            toastr()->success("Successfully Promocode Save");
            return back();
            }
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
    public function update(PromocodeRequest $request, $id)
    {
        try {
            //check date value is invalid
            if($request->start_date >= $request->end_date)
            {
                toastr()->error('End date must be bigger than start date');
                return back()->withInput();
            }

             //Is Same Name Promocode is exit
             $p=Promocode::where('property_id',$request->property_id)->whereDate('end_date', '>=' ,  \DB::raw('NOW()'))->where('room_type',$request->room_type)->where('code',$request->code)->where('id','!=',$id)->exists();
             if($p==true)
             {
                 toastr()->error('Same promocode is running');
                 return back()->withInput();
             }
            else{
                $promocode        = Promocode::find($id);
                $fillableData = $request->only($promocode->getFillable());
                $fillableData['updated_time']=Carbon::now();
                $fillableData['updated_by']=Auth()->user()->name;
                $promocode->fill($fillableData)->save();
                toastr()->success("Successfully Complementary Update");
                return back();
            }

        } catch (\Exception$e) {
            toastr()->error('Data Not Update', $e->getMessage());
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
            Promocode::where('id',$id)->update($data);
            Promocode::where('id', $id)->delete();
            toastr()->success("Successfully Promocode Delete");
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
            $data['promocode']    = Promocode::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.room_setting.deleted_item.deletedPromocode',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Promocode::where('id',$id)
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
            Promocode::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
