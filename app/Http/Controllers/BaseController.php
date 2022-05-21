<?php

namespace App\Http\Controllers;

use App\Models\Common\Country;
use Illuminate\Http\Request;

class BaseController extends Controller {
    Public function email_view() {
        $breadcrumbs = [
            ['link' => "app/email", 'name' => "Email"], ['name' => "List"],
        ];
        return view('modules.email.email', ['breadcrumbs' => $breadcrumbs]);
    }
    Public function chat_view() {
        return view('modules.chat.chat');
    }
    Public function calendar_view() {
        return view('modules.calender.calendar');
    }
    Public function todo_view() {
        $breadcrumbs = [
            ['link' => "app/todo", 'name' => "Todo"], ['name' => "index"],
        ];
        return view('modules.todo.todo', ['breadcrumbs' => $breadcrumbs]);
    }

    //Sidebar function

    //Booking and Reservasion
    Public function reservasion_list() {
        $breadcrumbs = [
            ['link' => "app/reservasion-list", 'name' => "Reservasion List"], ['name' => "index"],
        ];
        return view('modules.booking.reservasionList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function new_booking() {
        $country     = Country::all();
        $breadcrumbs = [
            ['link' => "app/new-booking", 'name' => "New Booking"], ['name' => "index"],
        ];
        return view('modules.booking.newBooking', ['breadcrumbs' => $breadcrumbs], compact('country'));
    }
    public function check_in_list() {
        $breadcrumbs = [
            ['link' => "app/check-in-list", 'name' => "Check In List"], ['name' => "index"],
        ];
        return view('modules.booking.checkInList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function check_out() {
        $breadcrumbs = [
            ['link' => "app/check-Out", 'name' => "Check Out"], ['name' => "index"],
        ];
        return view('modules.booking.checkOut', ['breadcrumbs' => $breadcrumbs]);
    }
    Public function room_status() {
        $breadcrumbs = [
            ['link' => "app/room-status", 'name' => "Room Status"], ['name' => "index"],
        ];
        return view('modules.booking.roomStatus', ['breadcrumbs' => $breadcrumbs]);
    }

    //Human and resource
    // public function hr_department() {
    //     $breadcrumbs = [
    //         ['link' => "app/department", 'name' => "Department"], ['name' => "index"],
    //     ];
    //     return view('modules.human_resource.department', ['breadcrumbs' => $breadcrumbs]);
    // }
    // public function hr_designation() {
    //     $breadcrumbs = [
    //         ['link' => "app/designation", 'name' => "Designation"], ['name' => "index"],
    //     ];
    //     return view('modules.human_resource.designation', ['breadcrumbs' => $breadcrumbs]);
    // }
    public function hr_leave() {
        $breadcrumbs = [
            ['link' => "app/leave", 'name' => "Leave"], ['name' => "index"],
        ];
        return view('modules.human_resource.leave', ['breadcrumbs' => $breadcrumbs]);
    }
    public function hr_leave_type() {
        $breadcrumbs = [
            ['link' => "app/leave", 'name' => "Employee Leave"], ['link' => "app/leave-type", 'name' => "Leave Type"], ['name' => "index"],
        ];
        return view('modules.human_resource.leaveType', ['breadcrumbs' => $breadcrumbs]);
    }
    public function hr_salary_process() {
        $breadcrumbs = [
            ['link' => "app/salary-process", 'name' => "Salary Process"], ['name' => "index"],
        ];
        return view('modules.human_resource.salaryProcess', ['breadcrumbs' => $breadcrumbs]);
    }
    public function hr_report() {
        $breadcrumbs = [
            ['link' => "app/report", 'name' => "Report"], ['name' => "index"],
        ];
        return view('modules.human_resource.hrReport', ['breadcrumbs' => $breadcrumbs]);
    }

    //Accounting
    public function chart_of_account() {
        $breadcrumbs = [
            ['link' => "app/chart-of-account", 'name' => "Chart of Account"], ['name' => "index"],
        ];
        return view('modules.accounting.chartOfAccount', ['breadcrumbs' => $breadcrumbs]);
    }
    public function general_ledger() {
        $breadcrumbs = [
            ['link' => "app/general-ledger", 'name' => "General Ledger"], ['name' => "index"],
        ];
        return view('modules.accounting.generalLedger', ['breadcrumbs' => $breadcrumbs]);
    }
    public function trail_balance() {
        $breadcrumbs = [
            ['link' => "app/trail-balance", 'name' => "Trail Balance"], ['name' => "index"],
        ];
        return view('modules.accounting.trailBalance', ['breadcrumbs' => $breadcrumbs]);
    }
    public function cash_flow() {
        $breadcrumbs = [
            ['link' => "app/cash-flow", 'name' => "Cash Flow"], ['name' => "index"],
        ];
        return view('modules.accounting.cashFlow', ['breadcrumbs' => $breadcrumbs]);
    }
    public function accounts_aging() {
        $breadcrumbs = [
            ['link' => "app/accounts-aging", 'name' => "Accounts Aging"], ['name' => "index"],
        ];
        return view('modules.accounting.accountsAging', ['breadcrumbs' => $breadcrumbs]);
    }
    public function asset_and_liability() {
        $breadcrumbs = [
            ['link' => "app/asset-and-liability", 'name' => "Asset and Liability"], ['name' => "index"],
        ];
        return view('modules.accounting.assetAndLiability', ['breadcrumbs' => $breadcrumbs]);
    }
    public function balance_sheet() {
        $breadcrumbs = [
            ['link' => "app/balance-sheet", 'name' => "Balance Sheet"], ['name' => "index"],
        ];
        return view('modules.accounting.balanceSheet', ['breadcrumbs' => $breadcrumbs]);
    }

    //Voucher Approval
    public function debit_voucher() {
        $breadcrumbs = [
            ['link' => "app/debit-voucher", 'name' => "Debit Voucher"], ['name' => "index"],
        ];
        return view('modules.voucher_module.debitVoucher', ['breadcrumbs' => $breadcrumbs]);
    }
    public function credit_voucher() {
        $breadcrumbs = [
            ['link' => "app/credit-voucher", 'name' => "Credit Voucher"], ['name' => "index"],
        ];
        return view('modules.voucher_module.creditVoucher', ['breadcrumbs' => $breadcrumbs]);
    }
    public function voucher_approval() {
        $breadcrumbs = [
            ['link' => "app/voucher-approval", 'name' => "Voucher Approval"], ['name' => "index"],
        ];
        return view('modules.voucher_module.voucherApproval', ['breadcrumbs' => $breadcrumbs]);
    }
    public function voucher_category_list() {
        $breadcrumbs = [
            ['link' => "app/voucher-category-list", 'name' => "Voucher Category List"], ['name' => "index"],
        ];
        return view('modules.voucher_module.voucherCategoryList', ['breadcrumbs' => $breadcrumbs]);
    }

    //Assets
    public function asset_list() {
        $breadcrumbs = [
            ['link' => "app/asset-list", 'name' => "Asset List"], ['name' => "index"],
        ];
        return view('modules.assets.assetList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function add_asset() {
        $breadcrumbs = [
            ['link' => "app/add-asset", 'name' => "Add Asset"], ['name' => "index"],
        ];
        return view('modules.assets.addAsset', ['breadcrumbs' => $breadcrumbs]);
    }
    public function purchase_asset() {
        $breadcrumbs = [
            ['link' => "app/purchase-asset", 'name' => "Purchase Asset"], ['name' => "index"],
        ];
        return view('modules.assets.purchaseAsset', ['breadcrumbs' => $breadcrumbs]);
    }
    public function sale_asset() {
        $breadcrumbs = [
            ['link' => "app/sale-asset", 'name' => "Sale Asset"], ['name' => "index"],
        ];
        return view('modules.assets.saleAsset', ['breadcrumbs' => $breadcrumbs]);
    }
    public function appreciation_depreciation() {
        $breadcrumbs = [
            ['link' => "app/appreciation-depreciation", 'name' => "Appreciation & Depreciation"], ['name' => "index"],
        ];
        return view('modules.assets.appreciationDepreciation', ['breadcrumbs' => $breadcrumbs]);
    }
    public function asset_category() {
        $breadcrumbs = [
            ['link' => "app/asset-category", 'name' => "Asset Category"], ['name' => "index"],
        ];
        return view('modules.assets.assetCategory', ['breadcrumbs' => $breadcrumbs]);
    }

    //Reporting
    public function reporting() {
        $breadcrumbs = [
            ['link' => "app/reporting", 'name' => "Reporting"], ['name' => "index"],
        ];
        return view('modules.reporting.reporting', ['breadcrumbs' => $breadcrumbs]);
    }

    //Security Claim
    public function policy_notify() {
        $breadcrumbs = [
            ['link' => "app/policy-notify", 'name' => "Policy Notify"], ['name' => "index"],
        ];
        return view('modules.security_claim.policyNotify', ['breadcrumbs' => $breadcrumbs]);
    }
    public function crime_record() {
        $breadcrumbs = [
            ['link' => "app/crime-record", 'name' => "Crime Record"], ['name' => "index"],
        ];
        return view('modules.security_claim.crimeRecord', ['breadcrumbs' => $breadcrumbs]);
    }
    public function essential_law() {
        $breadcrumbs = [
            ['link' => "app/essential-law", 'name' => "Essential Law"], ['name' => "index"],
        ];
        return view('modules.security_claim.essentialLaw', ['breadcrumbs' => $breadcrumbs]);
    }

    //Room Flat Type

    public function room_image() {
        return view('modules.room_flat.roomImage');
    }
    public function bed_list() {
        return view('modules.room_flat.bedList');
    }
    public function room_amenities() {
        return view('modules.room_flat.amenities');
    }
    // public function booking_type_list() {
    //     return view('modules.room_flat.bookingTypeList');
    // }
    // public function booking_source() {
    //     return view('modules.room_flat.bookingSource');
    // }
    public function complementary() {
        return view('modules.room_flat.complementary');
    }
    public function room_promocode() {
        return view('modules.room_flat.roomPromocode');
    }

    //Communication
    public function communication() {
        $breadcrumbs = [
            ['link' => "app/communication", 'name' => "Communication"], ['name' => "index"],
        ];
        return view('modules.communication.communication', ['breadcrumbs' => $breadcrumbs]);
    }

    //Configuration
    public function configuration() {
        $data['title']       = "Configuration";
        return view('modules.configuration.configuration', $data);
    }

    //VAT and Taxes
    public function manage_company() {
        $breadcrumbs = [
            ['link' => "app/manage-company", 'name' => "Manage Company"], ['name' => "index"]];
        return view('modules.company.manageCompany', ['breadcrumbs' => $breadcrumbs]);
    }
    // public function vat_and_taxes() {
    //     $breadcrumbs = [
    //         ['link' => "app/vat-and-taxes", 'name' => "VAT and Taxes"], ['name' => "index"]];
    //     return view('modules.company.vatTaxes', ['breadcrumbs' => $breadcrumbs]);
    // }

    //Payment Settings
    // public function payment_method() {
    //     $breadcrumbs = [
    //         ['link' => "app/payment-method", 'name' => "Payment Method"], ['name' => "index"]];
    //     return view('modules.payment_settings.paymentMethod', ['breadcrumbs' => $breadcrumbs]);
    // }
    // public function payment_setup() {
    //     $breadcrumbs = [
    //         ['link' => "app/payment-setup", 'name' => "Payment Setup"], ['name' => "index"]];
    //     return view('modules.payment_settings.paymentSetup', ['breadcrumbs' => $breadcrumbs]);
    // }

    //House Keeping
    // public function house_keeper() {
    //     $breadcrumbs = [
    //         ['link' => "app/house-keeper", 'name' => "House-keeper"], ['name' => "index"]];
    //     return view('modules.house_keeping.houseKeeper', ['breadcrumbs' => $breadcrumbs]);
    // }
    public function assign_room() {
        $breadcrumbs = [
            ['link' => "app/assign-room", 'name' => "Assign Room"], ['name' => "index"]];
        return view('modules.house_keeping.assignRoom', ['breadcrumbs' => $breadcrumbs]);
    }
    public function check_list() {
        $breadcrumbs = [
            ['link' => "app/check-list", 'name' => "Check List"], ['name' => "index"]];
        return view('modules.house_keeping.checkList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function room_qr_code() {
        $breadcrumbs = [
            ['link' => "app/room-qr-code", 'name' => "Room QR Code"], ['name' => "index"]];
        return view('modules.house_keeping.roomQrCode', ['breadcrumbs' => $breadcrumbs]);
    }
    public function room_cleaning() {
        $breadcrumbs = [
            ['link' => "app/room-cleaning", 'name' => "Room Cleaning"], ['name' => "index"]];
        return view('modules.house_keeping.roomCleaning', ['breadcrumbs' => $breadcrumbs]);
    }
    public function londry_service() {
        $breadcrumbs = [
            ['link' => "app/londry-service", 'name' => "Londry Service"], ['name' => "index"]];
        return view('modules.house_keeping.londryService', ['breadcrumbs' => $breadcrumbs]);
    }

    //Transport Facalities
    public function vechile_list() {
        $breadcrumbs = [
            ['link' => "app/vechile-list", 'name' => "Vechile List"], ['name' => "index"]];
        return view('modules.tranasfort_facalities.vechileList', ['breadcrumbs' => $breadcrumbs]);
    }
    public function new_vechile() {
        $breadcrumbs = [
            ['link' => "app/new-vechile", 'name' => "New Vechile"], ['name' => "index"]];
        return view('modules.tranasfort_facalities.newVechile', ['breadcrumbs' => $breadcrumbs]);
    }
    public function trans_booking_list() {
        $breadcrumbs = [
            ['link' => "app/booking-list", 'name' => "Booking List"], ['name' => "index"]];
        return view('modules.tranasfort_facalities.bookingList', ['breadcrumbs' => $breadcrumbs]);
    }

    //Support
    public function direct_chat() {
        $breadcrumbs = [
            ['link' => "app/direct-chat", 'name' => "Direct Chat"], ['name' => "index"]];
        return view('modules.support.directChat', ['breadcrumbs' => $breadcrumbs]);
    }
    public function email_us() {
        $breadcrumbs = [
            ['link' => "app/email-us", 'name' => "Email Us"], ['name' => "index"]];
        return view('modules.support.emailUs', ['breadcrumbs' => $breadcrumbs]);
    }
    public function help_line() {
        $breadcrumbs = [
            ['link' => "app/help-line", 'name' => "Help Line"], ['name' => "index"]];
        return view('modules.support.helpLine', ['breadcrumbs' => $breadcrumbs]);
    }

    //FAQ
    public function faq() {
        $breadcrumbs = [
            ['link' => "app/faq", 'name' => "FAQ"], ['name' => "index"]];
        return view('modules.faq.faq', ['breadcrumbs' => $breadcrumbs]);
    }

    //Register
    public function register() {
        $country = Country::all();
        return view('modules.authentic.register', compact('country'));
    }

    //Login
    public function login() {
        return view('modules.authentic.login');
    }

    //Forgot Password
    public function forgot() {
        return view('modules.authentic.forgotPass');
    }

    //Reset Password
    public function reset_pass(Request $request) {
        return view('modules.authentic.resetPass');
    }
    public function reset(Request $request) {
        return redirect()->back();

    }

}
