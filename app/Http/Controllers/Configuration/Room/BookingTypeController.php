<?php

namespace App\Http\Controllers\Configuration\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Room\BookingTypeRequest;
use App\Models\Configuration\Property;
use App\Models\Configuration\Room\BookingType;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        try {
            $mapping    = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
            $data['bookingType']     = BookingType::with('property:id,name')->whereIn('property_id', $mapping)->get();
            $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['title'] = 'Booking Types';
            return view('modules.configuration.room_setting.bookingTypeList', $data);
        } catch (\Throwable $th) {
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
    public function store(BookingTypeRequest $request){
        try {
            $bookingType = new BookingType();
            $fillableData = $request->only($bookingType->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $bookingType->fill($fillableData)->save();
            toastr()->success('Booking Type Save Successfylly');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Booking Type Not Save');
            return back()->withInput();
        }
    }
public function show(){

}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingTypeRequest $request, $id){
        try {
            $bookingType = BookingType::find($id);
            $fillableData = $request->only($bookingType->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $bookingType->fill($fillableData)->save();
            toastr()->success('Booking Type Update Successfully');
            return back();
        } catch (\Exception $e) {
                toastr()->error('Data Not Update');
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
            BookingType::where('id',$id)->update($data);
            BookingType::find($id)->delete();
            toastr()->success('Booking Type Successfully Delete');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Booking Type Do Not Delete');
            return back();
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['booking_type']    = BookingType::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.room_setting.deleted_item.deletedBookingType',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            BookingType::where('id',$id)
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
            BookingType::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
