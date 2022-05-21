<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //Notification and Sms
    public function send_bulk_sms() {
        $breadcrumbs = [
            ['link' => "app/send-bulk-sms", 'name' => "Send Bulk Sms"], ['name' => "index"],
        ];
        return view('modules.notification.sendBulkSms', ['breadcrumbs' => $breadcrumbs]);
    }
    public function send_single_sms() {
        $breadcrumbs = [
            ['link' => "app/send-single-sms", 'name' => "Send Single Sms"], ['name' => "index"],
        ];
        return view('modules.notification.sendSingleSms', ['breadcrumbs' => $breadcrumbs]);
    }
    public function sms_pannel() {
        $breadcrumbs = [
            ['link' => "app/sms-pannel", 'name' => "Sms Pannel"], ['name' => "index"],
        ];
        return view('modules.notification.smsPannel', ['breadcrumbs' => $breadcrumbs]);
    }
    public function sms_template() {
        $breadcrumbs = [
            ['link' => "app/sms-template", 'name' => "Sms Template"], ['name' => "index"],
        ];
        return view('modules.notification.smsTemplate', ['breadcrumbs' => $breadcrumbs]);
    }
    public function email_template() {
        $breadcrumbs = [
            ['link' => "email-template", 'name' => "Email Template"], ['name' => "index"],
        ];
        return view('modules.notification.emailTemplate', ['breadcrumbs' => $breadcrumbs]);
    }
    public function sms_log() {
        $breadcrumbs = [
            ['link' => "app/sms-log", 'name' => "Sms Log"], ['name' => "index"],
        ];
        return view('modules.notification.smsLog', ['breadcrumbs' => $breadcrumbs]);
    }
    public function send_bulk_email() {
        $breadcrumbs = [
            ['link' => "app/send-bulk-email", 'name' => "Send Email Bulk"], ['name' => "index"],
        ];
        return view('modules.notification.sendBulkEmail', ['breadcrumbs' => $breadcrumbs]);
    }
    public function email_log() {
        $breadcrumbs = [
            ['link' => "app/email-log", 'name' => "Email Log"], ['name' => "index"],
        ];
        return view('modules.notification.emailLog', ['breadcrumbs' => $breadcrumbs]);
    }
    public function email_configaration() {
        $breadcrumbs = [
            ['link' => "app/email-configaration", 'name' => "Email Configaration"], ['name' => "index"],
        ];
        return view('modules.notification.emailConfigaration', ['breadcrumbs' => $breadcrumbs]);
    }
}
