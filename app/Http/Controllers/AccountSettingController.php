<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function view_account()
    {
        $breadcrumbs = [
            ['link' => "app/account-settings", 'name' => "Account Settings"], ['name' => "index"],
        ];
       return view('modules.account_setting.accountView', ['breadcrumbs' => $breadcrumbs]);
    }
}
