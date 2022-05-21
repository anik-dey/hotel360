<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{

    Public function document_add(Request $request) {

        if($request->method()=='GET')
        {
            $documents=Document::where('user_id',Auth()->user()->id )->orderBy('id', 'DESC')->get();
            $breadcrumbs = [
                ['link' => "app/document", 'name' => "Document"], ['name' => "index"],
            ];
            return view('modules.document.document', ['breadcrumbs' => $breadcrumbs], compact('documents'));
        }
        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'document' => 'required',
                'document.*' => 'required|mimes:pdf,zip,csv,txt,doc,docx,jpeg,jpg,png|max:2048',
                'title'       => 'required'
            ]);
             try{
                if($request->hasfile('document'))
                {
                   foreach($request->file('document') as $key => $file)
                   {
                       $Name = $file->getClientOriginalName();
                       $fileName=time().'.'.$Name;
                       $file->move(public_path('document-store'), $fileName);

                       $insert[$key]['user_id'] = Auth()->user()->id;
                       $insert[$key]['document'] = $fileName;
                       $insert[$key]['title'] = $request->title;
                       $insert[$key]['expiry_date'] = $request->expiry_date;
                       $insert[$key]['description'] = $request->description;
                       $insert[$key]['created_at'] = Carbon::now();
                       $insert[$key]['updated_at'] = Carbon::now();
                   }
                }
               Document::insert($insert);
               toastr()->success('Successfully Save');
               return redirect()->back();
             }
             catch (\Exception $e){
                toastr()->error($e->getMessage());
                 return back();
             }
        }
    }


    Public function document_expiry() {

        $documents=Document::where('user_id',Auth()->user()->id )->where('expiry_date', '<' , Carbon::now())->orderBy('id', 'DESC')->get();
        $breadcrumbs = [
            ['link' => "app/document", 'name' => "Documents"], ['link' => "app/document-expiry", 'name' => "Document Expiry"], ['name' => "index"],
        ];
        return view('modules.document.documentExpiry', ['breadcrumbs' => $breadcrumbs], compact('documents'));
    }

    function downloadFile($filename){
        $path =  public_path('/document-store/');
        $filePath = $path . $filename;
        // dd($filePath);
    	$headers = ['Content-Type: application/pdf'];
          $fileName=$filename;
    	return response()->download($filePath, $fileName, $headers);
    }

    public function document_delete($id,$filename)
    {
        DB::table('documents')->where('id', $id)->delete();
        $path =  public_path('/document-store/');
        $filePath = $path . $filename;
        File::delete($filePath);
        // alert()->success('Delete Successfully')->persistent('Close')->autoclose(5500);
        toastr()->success('Recorde Delete Successfully');
        return redirect()->back();
    }

}