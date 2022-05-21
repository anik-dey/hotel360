<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Common\Country;
use App\Models\Common\State;
use App\Models\Common\City;
use App\Models\Common\Thana;
use App\Models\Mapping;
use App\Models\Configuration\Property;
use App\Models\Guest\Guest;
use App\Models\Activity\Activity;
use Illuminate\Http\Request;

class GuestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $data['guest']=Guest::with('country:id,name')->where('id',$id)->first();
             $data['value']=Guest::select('state','city','zipcode')->where('id',$id)->first();
             $data['state']=State::where('id',$data['value']->state)->first();
             if($data['state']=='')
             {
                 $data['state']='';
             }
             $data['city']=City::where('id',$data['value']->city)->first();
             if($data['city']=='')
             {
                 $data['city']='';
             }
             $data['thana']=Thana::where('id',$data['value']->zipcode)->first();
             if($data['thana']=='')
             {
                 $data['thana']='';
             }
             $data['breadcrumbs'] = [
                ['link' => "guest", 'name' => "Guest List"],['link' => "guest-view/$id", 'name' => "View Guest"], ['name' => "index"],
            ];

            //Guest Activity
            $data['activity']=Activity::where('guest_id',$id)->latest()->get();

            return view('modules.guest.guestDetail',$data);
        }  catch(\Exception $e){
            toastr()->error('Something Went Wrong', $e->getMessage());
            return back()->withInput();
        }

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
