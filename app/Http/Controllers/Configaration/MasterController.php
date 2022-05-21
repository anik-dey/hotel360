<?php

namespace App\Http\Controllers\Configaration;

use App\Http\Controllers\Controller;

class MasterController extends Controller {
    // Master nav menu

    // General
    public function currency() {
        return view('modules.master.currency');
    }
    public function pay_method() {
        return view('modules.master.payMethod');
    }
    public function extra_charge() {
        return view('modules.master.extraCharge');
    }
    public function discounts() {
        return view('modules.master.discounts');
    }
    public function identity_type() {
        return view('modules.master.identityType');
    }
    public function pay_outs() {
        return view('modules.master.payOuts');
    }
    public function reservation_type() {
        return view('modules.master.reservationType');
    }
    public function meal_plan() {
        return view('modules.master.mealPlan');
    }

    // Email Template
    public function temp_category() {
        return view('modules.master.tempCategory');
    }
    public function template() {
        return view('modules.master.emailtamplate');
    }
    // Reason
    public function reason() {
        return view('modules.master.reason');
    }
    public function blacklist_reason() {
        return view('modules.master.blacklistReason');
    }


    // Settings

    // Notice
    // public function notice() {
    //     return view('modules.notice.notice');
    // }
    // Others
    public function feedback() {
        return view('modules.master.feedback');
    }
    public function loyalty() {
        return view('modules.master.loyalty');
    }
}
