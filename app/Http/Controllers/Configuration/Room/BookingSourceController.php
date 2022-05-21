<?php

namespace App\Http\Controllers\Configuration\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Room\BookingSourceRequest;
use App\Models\Configuration\Property;
use App\Models\Configuration\room\BookingSource;
use App\Models\Mapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookingSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $mapping = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['bookingSource'] =BookingSource::where('property_id', $mapping)->get();
        $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['title']='Booking Source';
        return view('modules.configuration.room_setting.bookingSource', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingSourceRequest $request){
        try {
            $bookingSource = new BookingSource();
            $fillableData = $request->only($bookingSource->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $bookingSource->fill($fillableData)->save();
            toastr()->success('Booking Source Successfully Save');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Save');
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
    public function update(BookingSourceRequest $request, $id){
        try {
            $bookingSource = BookingSource::find($id);
            $fillableData = $request->only($bookingSource->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $bookingSource->fill($fillableData)->save();
            toastr()->success('Booking Source Update Successfully');
            return back();
        } catch (\Exception $e) {
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
            BookingSource::where('id',$id)->update($data);
            BookingSource::find($id)->delete();
            toastr()->success('Booking Source Delete Successful');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Data Do Not Delete');
            return back();
        }
    }

    public function deleted_item()
    {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $data['bookingSource']    = BookingSource::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.room_setting.deleted_item.deletedBookingSource',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            BookingSource::where('id',$id)
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
            BookingSource::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
