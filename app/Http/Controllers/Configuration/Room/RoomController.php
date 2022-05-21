<?php

namespace App\Http\Controllers\Configuration\Room;

use App\Models\Mapping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuration\Property;
use App\Http\Requests\Room\RoomRequest;
use App\Models\configuration\Room\Floor;
use App\Models\Configuration\room\Amenity;
use Symfony\Component\Console\Input\Input;
use App\Models\Configuration\room\Room_list;
use Carbon\Carbon;

class RoomController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try{
            $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
            $property = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
            $room_lists = Room_list::with('floors:id,floor_name')->select(['id', 'room_type','room_number','rate','bed_ex_charge','ex_person_charge','capacity','extra_capacity','floor_id'])->whereIn('property_id', $mapping)->get();
            return view('modules.configuration.room_setting.roomList',compact('property','room_lists'));
        } catch(\Exception$e){
            toastr()->error($e->getMessage());
            return back();
        }

    }

    public function fetchFloor(Request $request)
    {
        $data['floor'] = Floor::where("property_id",$request->country_id)->orderBy('floor_name','asc')->get(["floor_name", "id"]);
        return response()->json($data);
    }

    public function fetchRoom(Request $request)
    {

        if (Room_list::where('room_number',$request->room_number)->where('property_id',$request->property_id)->exists()) {
            $data['room_number']="Same Room Exit";
            return response()->json($data);
         }
         else{
            $data['room_number']="You Can Confirm Room Number";
            return response()->json($data);
         }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['title']="Room Create";
        $mapping=Mapping::where('user_id',Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        return View('modules.configuration.room_setting.roomCreate',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request) {
        try {
            if (Room_list::where('room_number',$request->room_number)->where('property_id',$request->property_id)->exists()) {
                toastr()->error('Same Room Number Already Exit');
                return back()->withInput();
             }
            $room_lists       = new Room_list();
            $fillableData = $request->only($room_lists->getFillable());
            $fillableData['created_by']=Auth()->user()->name;
            $room_lists->fill($fillableData)->save();
            toastr()->success("Successfully room Save");
            return redirect('configuration/room-settings/room-list');
        } catch (\Exception$e) {
            toastr()->error('Data Not Saved', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration\room\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room_list $room) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration\room\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        try{
            $property_id=Room_list::where('id',$id)->pluck('property_id');
            $floors = Floor::select(['id', 'floor_name'])->whereIn('property_id', $property_id)->get();
            $room_lists=Room_list::find($id);
            return view('modules.configuration.room_setting.roomEdit',compact('room_lists','floors'));
        }catch(\Exception$e){
            toastr()->error($e->getMessage());
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration\room\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request,$id) {

        try {
            if (Room_list::where('room_number',$request->room_number)->where('property_id',$request->property_id)->where('id','!=',$id)->exists()) {
                toastr()->error('Same Room Number Already Exit');
                return back()->withInput();
             }
            $room_lists        = Room_list::find($id);
            $fillableData = $request->only($room_lists->getFillable());
            $fillableData['updated_time']=Carbon::now();
            $fillableData['updated_by']=Auth()->user()->name;
            $room_lists->fill($fillableData)->save();
            toastr()->success("Successfully Room Update");
            return redirect()->route('room-list.index');
        } catch (\Exception$e) {
            toastr()->error('Data Not Saved', $e->getMessage());
            return back()->withInput();
        }
    }

    public function fetchRoomUpdate(Request $request)
    {
        if (Room_list::where('room_number',$request->room_number)->where('property_id',$request->property_id)->where('id','!=',$request->id)->exists()) {
            $data['room_number']="Same Room Exit";
            return response()->json($data);
         }
         else{
            $data['room_number']="You Can Confirm Room Number";
            return response()->json($data);
         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration\room\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            $data['deleted_by']=Auth()->user()->name;
            Room_list::where('id',$id)->update($data);
            Room_list::where('id', $id)->delete();
            toastr()->success("Successfully Room Delete");
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
            $data['room_lists']    = Room_list::with('property:id,name')->whereIn('property_id', $mapping)->orderBy('deleted_at','desc')->onlyTrashed()->paginate(10);
            return view('modules.configuration.room_setting.deleted_item.deletedRoomList',$data);
        }catch (\Exception$e) {
            toastr()->error("Somthing went wrong");
            return back();
        }
    }

    public function restore_item($id)
    {
        try{
            Room_list::where('id',$id)
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
            Room_list::whereId($id)
            ->forceDelete();
            toastr()->success("Successfully Deleted ");
            return back();
        }catch (\Exception$e) {
            toastr()->error("Data not Deleted");
            return back();
        }
    }
}
