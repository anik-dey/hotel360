<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;

class GuidelinesController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('modules.controller.guidelines-front');
    }
}
