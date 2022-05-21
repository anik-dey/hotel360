<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\TopicsRequest;
use App\Models\Superadmin\Topics;
use Illuminate\Http\Request;

class TopicsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['title']  = 'Guideline Topics';
        $data['topics'] = Topics::orderBy('id', 'desc')->paginate(5);
        return view('modules.controller.topics', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicsRequest $request) {
        try {
            $file     = $request->file('image');
            $name     = $file->getClientOriginalName();
            $fileName = time() . '.' . $name;
            $file->move(public_path('guideline_thumb'));
            $topics                = new Topics();
            $fillableData          = $request->only($topics->getFillable());
            $fillableData['image'] = $fileName;
            $topics->fill($fillableData)->save();
            toastr()->success('Topic Save Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Save', $e->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
