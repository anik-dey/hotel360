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
use App\Models\Configuration\CommonSettings\CommonSetting;
use App\Models\Activity\Activity;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Session;
use Carbon;
use DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['breadcrumbs'] = [
            ['link' => "guest", 'name' => "Guest List"], ['name' => "index"],
        ];
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['guest']     = Guest::select('id','name','email','phone')->whereIn('property_id', $mapping)->orderBy('id','DESC')->get();
        return view('modules.guest.clientList',$data);
    }

    Public function check_client(Request $request) {

        //Check Email and phone verification section hidden or not
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['setting']=CommonSetting::whereIn('property_id', $mapping)->first();

        if($data['setting']->email_verification == '2' && $data['setting']->phone_verification == '2')
        {
            toastr()->success("Successfully Data Save");
          return redirect()->route('guest.index');
        }
        else{
            $data['email']=$request->session()->get('email');
            Session::forget('email');
            $data['breadcrumbs'] = [
                ['link' => "guest", 'name' => "Guest List"],['link' => "guest/create", 'name' => "New Guest"],['link' => "check-client", 'name' => "Check Guest"], ['name' => "index"]
            ];
            return view('modules.guest.checkClient',$data);
        }
    }

    public function create(Request $request)
    {
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['setting']=CommonSetting::whereIn('property_id', $mapping)->first();
        $data['country'] = Country::all();
        $data['result']="";
        $data['breadcrumbs'] = [
            ['link' => "guest", 'name' => "Guest List"],['link' => "guest/create", 'name' => "New Guest"], ['name' => "index"],
        ];
        return view('modules.guest.newClient',$data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if($request->image !='' && $request->passport_attach == '' && $request->visa_attach == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['image']=$this->image($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->passport_attach !='' && $request->image == '' && $request->visa_attach == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['passport_attach']=$this->passport_attach($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->visa_attach !='' && $request->image == '' && $request->passport_attach == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['visa_attach']=$this->visa_attach($request);;
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->image !='' && $request->visa_attach != '' && $request->passport_attach == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['image']=$this->image($request);
                $fillableData['visa_attach']=$this->visa_attach($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->image !='' && $request->passport_attach != '' && $request->visa_attach == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['image']=$this->image($request);
                $fillableData['passport_attach']=$this->passport_attach($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->visa_attach !='' && $request->passport_attach != '' && $request->image == '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['visa_attach']=$this->visa_attach($request);
                $fillableData['passport_attach']=$this->passport_attach($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            if($request->visa_attach !='' && $request->passport_attach != '' && $request->image != '')
            {
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $fillableData['image']=$this->image($request);
                $fillableData['visa_attach']=$this->visa_attach($request);
                $fillableData['passport_attach']=$this->passport_attach($request);
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            else{
                $guest        = new Guest();
                $fillableData = $request->only($guest->getFillable());
                $guest->fill($fillableData)->save();
                $this->activity($guest->id);
                DB::commit();
                Session::put('email', $request->email);
                toastr()->success("Successfully Data Save");
                return redirect()->route('check-client');
            }
            } catch (\Exception$e) {
                DB::rollback();
                toastr()->error('Data Not Saved', $e->getMessage());
                return back()->withInput();
        }
    }

    public function image($request){
        $img=$request->image;
        $folderPath = "guest_picture/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';

        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);

        return $fileName;
    }

    public function passport_attach($request){
        $validator = $request->validate([
        'passport_attach'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);
        $file     = $request->file('passport_attach');
        $Name     = $file->getClientOriginalName();
        $passportName = uniqid() . '.' . $Name;
        $file->move(public_path('guest_picture'), $passportName);
        return $passportName;
    }

    public function visa_attach($request){
        $validator = $request->validate([
        'visa_attach'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);
        $file     = $request->file('visa_attach');
        $Name     = $file->getClientOriginalName();
        $visaName = uniqid() . '.' . $Name;
        $file->move(public_path('guest_picture'), $visaName);
        return $visaName;
    }

    public function show($id)
    {
        $mapping  = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['property'] = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['setting']=CommonSetting::where('property_id', $id)->first();
        $data['country'] = Country::all();
        $data['result']="";
        $data['breadcrumbs'] = [
            ['link' => "guest", 'name' => "Guest List"],['link' => "check-client", 'name' => "Check Guest"], ['link' => "guest/create", 'name' => "New Guest"], ['name' => "index"],
        ];
        return view('modules.guest.newClient',$data);
    }

    public function activity($guest_id)
    {
      $data=array();
      $data['user_id']=Auth()->user()->id;
      $data['guest_id']=$guest_id;
      $data['details']='Guest added by '.Auth()->user()->name;
      $data['created_at']=Carbon\Carbon::now();
      Activity::create($data);
      return 0;

    }

    public function edit($id)
    {
        $property_id=Guest::select('id','property_id')->where('id',$id);
        $data['setting']=CommonSetting::where('property_id', $property_id->property_id)->first();
        $data['country'] = Country::all();
        $data['email']="";
        return view('modules.guest.editClient');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function view($id)
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
                ['link' => "guest", 'name' => "Guest List"],['link' => "guest-view/$id", 'name' => "Edit Guest"], ['name' => "index"],
            ];
            return view('modules.guest.editClient',$data);
        }  catch(\Exception $e){
            toastr()->error('Something Went Wrong', $e->getMessage());
            return back()->withInput();
        }

    }

    public function destroy($id)
    {
        try{

            //Delete Guest all document from public folder
            $document=Guest::select('image','passport_attach','visa_attach')->where('id',$id)->first();

            Guest::where('id', $id)->delete();

            if($document->image != '')
            {
                $path =  public_path('/guest_picture/');
                $filePath = $path . $document->image;
                File::delete($filePath);
            }

            if($document->passport_attach != '')
            {
                $path =  public_path('/guest_picture/');
                $filePath = $path . $document->passport_attach;
                File::delete($filePath);
            }

            if($document->visa_attach != '')
            {
                $path =  public_path('/guest_picture/');
                $filePath = $path . $document->visa_attach;
                File::delete($filePath);
            }

            toastr()->success("Successfully Data Delete");
            return redirect()->back();
        } catch(\Exception $e){
            toastr()->error('Data Not Delete', $e->getMessage());
            return back()->withInput();
        }

    }

}
