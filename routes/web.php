<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\StaterkitController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//  Route::get('send', function(){
//     $sms = new SmsServices();
//     $result = $sms->sendSms('01716348711','test from sabber');
//     dd($result);
//  });

Route::get('seed', function () {
    Artisan::call('db:seed');

    dd(base_path());
    $json = \File::get("database/data/countries.json");

    dd($json);
    $countries = json_decode($json);

    foreach ($countries as $key => $value) {
        (new Country())->fill($value)->save();
    }
});

Auth::routes();
Route::middleware(['auth', 'isVerified'])->group(function () {
    Route::redirect('/', 'login');
    // Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('home', [StaterkitController::class, 'home'])->name('home');
    // Route Components
    Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
    Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
    Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
    Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
    Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');

    // locale Route
    Route::get('lang/{locale}', [LanguageController::class, 'swap']);

    //Navbar Route
    Route::get('app/email', [BaseController::class, 'email_view'])->name('email-view');
    Route::get('app/chat', [BaseController::class, 'chat_view'])->name('chat-view');
    Route::get('app/calendar', [BaseController::class, 'calendar_view'])->name('calendar-view');
    Route::get('app/todo', [BaseController::class, 'todo_view'])->name('todo-view');

    //Sidebar Route

    //Booking and Reservasion
    Route::get('app/reservasion-list', [BaseController::class, 'reservasion_list'])->name('reservasion-list');
    Route::get('app/new-booking', [BaseController::class, 'new_booking'])->name('new-booking');
    Route::get('app/check-in-list', [BaseController::class, 'check_in_list'])->name('check-in-list');
    Route::get('app/check-out', [BaseController::class, 'check_out'])->name('check-out');
    Route::get('app/room-status', [BaseController::class, 'room_status'])->name('room-status');

    //Accounting
    // Route::get('app/chart-of-account', [BaseController::class, 'chart_of_account'])->name('chart-of-account');
    Route::get('app/general-ledger', [BaseController::class, 'general_ledger'])->name('general-ledger');
    Route::get('app/trail-balance', [BaseController::class, 'trail_balance'])->name('trail-balance');
    Route::get('app/cash-flow', [BaseController::class, 'cash_flow'])->name('cash-flow');
    Route::get('app/accounts-aging', [BaseController::class, 'accounts_aging'])->name('accounts-aging');
    Route::get('app/asset-and-liability', [BaseController::class, 'asset_and_liability'])->name('asset-and-liability');
    Route::get('app/balance-sheet', [BaseController::class, 'balance_sheet'])->name('balance-sheet');

    //Vouchers Module
    Route::get('app/debit-voucher', [BaseController::class, 'debit_voucher'])->name('debit-voucher');
    Route::get('app/credit-voucher', [BaseController::class, 'credit_voucher'])->name('credit-voucher');
    Route::get('app/voucher-approval', [BaseController::class, 'voucher_approval'])->name('voucher-approval');
    Route::get('app/voucher-category-list', [BaseController::class, 'voucher_category_list'])->name('voucher-category-list');

    //Assets
    Route::get('app/asset-list', [BaseController::class, 'asset_list'])->name('asset-list');
    Route::get('app/add-asset', [BaseController::class, 'add_asset'])->name('add-asset');
    Route::get('app/purchase-asset', [BaseController::class, 'purchase_asset'])->name('purchase-asset');
    Route::get('app/sale-asset', [BaseController::class, 'sale_asset'])->name('sale-asset');
    Route::get('app/appreciation-depreciation', [BaseController::class, 'appreciation_depreciation'])->name('appreciation-depreciation');
    Route::get('app/asset-category', [BaseController::class, 'asset_category'])->name('asset-category');

    //Reporting
    Route::get('app/general/reporting', [BaseController::class, 'reporting'])->name('reporting');

    //Security Claim
    Route::get('app/policy-notify', [BaseController::class, 'policy_notify'])->name('policy-notify');
    Route::get('app/crime-record', [BaseController::class, 'crime_record'])->name('crime-record');
    Route::get('app/essential-law', [BaseController::class, 'essential_law'])->name('essential-law');

    //Room Flat Type
    Route::get('app/floor-plan-list', [BaseController::class, 'floor_plan_list'])->name('floor-plan-list');
    // Route::get('app/room-list', [BaseController::class, 'room_list'])->name('room-list');
    // Route::get('app/room-image', [BaseController::class, 'room_image'])->name('room-image');
    // Route::get('app/room-owner', [BaseController::class, 'room_owner'])->name('room-owner');
    // Route::get('app/amenities', [BaseController::class, 'room_amenities'])->name('room-amenities');
    // Route::get('app/booking-type-list', [BaseController::class, 'booking_type_list'])->name('booking-type-list');
    Route::get('app/booking-source', [BaseController::class, 'booking_source'])->name('booking-source');
    // Route::get('app/complementary', [BaseController::class, 'complementary'])->name('complementary');
    Route::get('app/room-promocode', [BaseController::class, 'room_promocode'])->name('room-promocode');

    //Communication
    Route::get('app/communication', [BaseController::class, 'communication'])->name('communication');

    //Configuration
    Route::get('system/configuration', [BaseController::class, 'configuration'])->name('configuration');

    //Company
    Route::get('app/manage-company', [BaseController::class, 'manage_company'])->name('manage-company');
    // Route::get('app/vat-and-taxes', [BaseController::class, 'vat_and_taxes'])->name('vat-and-taxes');

    //Payment Settings
    // Route::get('app/payment-method', [BaseController::class, 'payment_method'])->name('payment-method');
    // Route::get('app/payment-setup', [BaseController::class, 'payment_setup'])->name('payment-setup');

    //House Keeping
    Route::get('app/check-list', [BaseController::class, 'check_list'])->name('check-list');
    Route::get('app/room-qr-code', [BaseController::class, 'room_qr_code'])->name('room-qr-code');
    Route::get('app/room-cleaning', [BaseController::class, 'room_cleaning'])->name('room-cleaning');
    Route::get('app/londry-service', [BaseController::class, 'londry_service'])->name('londry-service');

    //Transport Facalities
    Route::get('app/vechile-list', [BaseController::class, 'vechile_list'])->name('vechile-list');
    Route::get('app/new-vechile', [BaseController::class, 'new_vechile'])->name('new-vechile');
    Route::get('app/booking-list', [BaseController::class, 'trans_booking_list'])->name('booking-list');

    //Support
    Route::get('app/direct-chat', [BaseController::class, 'direct_chat'])->name('direct-chat');
    Route::get('app/email-us', [BaseController::class, 'email_us'])->name('email-us');
    Route::get('app/help-line', [BaseController::class, 'help_line'])->name('help-line');

    //FAQ
    Route::get('app/faq', [BaseController::class, 'faq'])->name('faq');

    //Controller
    Route::get('system/controller', [BaseController::class, 'controller'])->name('controller');

});
