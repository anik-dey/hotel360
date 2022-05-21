<ul class="ps-container main-menu-content sidebarMenu">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item" {{ (request()->is('app/guest-list*')) || (request()->is('wakeup-list*')) ||
            (request()->is('guest*')) ? 'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <i data-feather="user"></i>
                <span class="menu-title text-truncate">Guest</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('guest*')) ? 'active' : '' }}"><a class="d-flex align-items-center "
                        href="{{ route('guest.index') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">Guest
                            List</span></a> </li>
                <li class="{{ (request()->is('wakeup-list*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('wakeup-list.index') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Avatar">Wake Up List</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/reservasion-list*')) || (request()->is('app/new-booking*')) ||
            (request()->is('app/check-in-list*'))|| (request()->is('app/room-status*')) ? 'sidebar-group-active open' : ''
            }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-archive">
                    <polyline points="21 8 21 21 3 21 3 8"></polyline>
                    <rect x="1" y="3" width="22" height="5"></rect>
                    <line x1="10" y1="12" x2="14" y2="12"></line>
                </svg>
                <span class="menu-title text-truncate">Booking/Reserve</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/reservasion-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('reservasion-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Alerts">Reservasion
                            List</span></a> </li>
                <li class="{{ (request()->is('app/new-booking*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('new-booking') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">New
                            Booking</span></a> </li>
                <li class="{{ (request()->is('app/check-in-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('check-in-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Check In
                            List</span></a> </li>
                <li class="{{ (request()->is('app/room-status*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('room-status') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Room
                            Status</span></a> </li>
            </ul>

        </li>
        <li class="nav-item" class="active" {{ (request()->is('app/department*')) || (request()->is('app/designation*')) ||
            (request()->is('app/employee-list*')) || (request()->is('app/new-employee*')) || (request()->is('app/leave*'))
            || (request()->is('app/salary-process*')) || (request()->is('app/report*')) ? 'sidebar-group-active open' : ''
            }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-trello">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <rect x="7" y="7" width="3" height="9"></rect>
                    <rect x="14" y="7" width="3" height="5"></rect>
                </svg>
                <span class="menu-title text-truncate">Human Resource</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/department*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('departments.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Alerts">Department</span></a> </li>
                <li class="{{ (request()->is('app/designation*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('designations.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Avatar">Designation</span></a> </li>
                <li class="{{ (request()->is('app/employee-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('hr-employee-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Employee
                            List</span></a> </li>
                <li class="{{ (request()->is('app/new-employee*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('hr-new-employee') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">New
                            Employee</span></a> </li>
                <li class="{{ (request()->is('app/leave*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('hr-leave') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">Leave</span></a> </li>
                <li class="{{ (request()->is('app/salary-process*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('hr-salary-process') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Salary
                            Process</span></a> </li>
                <li class="{{ (request()->is('app/report*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('hr-report') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">HR
                            Report</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('accounting/chart-of-account*')) || (request()->is('app/general-ledger*')) ||
            (request()->is('app/trail-balance*')) || (request()->is('app/cash-flow*')) ||
            (request()->is('app/accounts-aging*')) || (request()->is('app/asset-and-liability*')) ||
            (request()->is('app/balance-sheet*')) ? 'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check-circle">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span class="menu-title text-truncate">Accounting</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('accounting/chart-of-account*')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('chart-of-account.index') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Chart of
                            Account</span>
                    </a>
                </li>
                <li class="{{ (request()->is('app/general-ledger*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('general-ledger') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">General
                            Ledger</span></a> </li>
                <li class="{{ (request()->is('app/trail-balance*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('trail-balance') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Trail
                            Balance</span></a> </li>
                <li class="{{ (request()->is('app/cash-flow*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('cash-flow') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Avatar">Cash
                            Flow</span></a> </li>
                <li class="{{ (request()->is('app/accounts-aging*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('accounts-aging') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Accounts
                            Aging</span></a> </li>
                <li class="{{ (request()->is('app/asset-and-liability*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('asset-and-liability') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Asset and
                            Liability</span></a> </li>
                <li class="{{ (request()->is('app/balance-sheet*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('balance-sheet') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Balance
                            Sheet</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/debit-voucher*')) || (request()->is('app/credit-voucher*')) ||
            (request()->is('app/voucher-approval*'))|| (request()->is('app/voucher-category-list*')) ? 'sidebar-group-active
            open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus-square">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
                <span class="menu-title text-truncate">Vouchers Module</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/debit-voucher*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('debit-voucher') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Debit
                            Voucher</span></a> </li>
                <li class="{{ (request()->is('app/credit-voucher*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('credit-voucher') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Credit
                            Voucher</span></a> </li>
                <li class="{{ (request()->is('app/voucher-approval*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('voucher-approval') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Voucher
                            Approval</span></a> </li>
                <li class="{{ (request()->is('app/voucher-category-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('voucher-category-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Voucher
                            Category List</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/asset-list*')) || (request()->is('app/add-asset*')) ||
            (request()->is('app/purchase-asset*')) || (request()->is('app/sale-asset*')) ||
            (request()->is('app/appreciation-depreciation*')) || (request()->is('app/asset-category*')) ?
            'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fan"
                    viewBox="0 0 16 16">
                    <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0
                    0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019
                    2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944
                    2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535
                    2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8
                    10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216
                    2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6
                    8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37
                    8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355
                    3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06
                    4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z" />
                </svg>
                <span class="menu-title text-truncate">Assets</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/asset-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('asset-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Asset
                            List
                        </span></a></li>
                <li class="{{ (request()->is('app/add-asset*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('add-asset') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Avatar">Add Asset
                        </span></a> </li>
                <li class="{{ (request()->is('app/asset-category*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('asset-category') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Asset
                            Category
                        </span></a> </li>
                <li class="{{ (request()->is('app/appreciation-depreciation*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('appreciation-depreciation') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Alerts">Appreciation
                            /Depreciation</span></a> </li>
                <li class="{{ (request()->is('app/purchase-asset*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('purchase-asset') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Purchase
                            Asset
                        </span></a> </li>
                <li class="{{ (request()->is('app/sale-asset*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('sale-asset') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Sale
                            Asset</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/send-bulk-sms*')) || (request()->is('app/send-single-sms*')) ||
            (request()->is('app/sms-pannel*')) || (request()->is('app/sms-template*'))|| (request()->is('email-template*')) || (request()->is('app/sms-log*')) ||
            (request()->is('app/send-bulk-email*')) || (request()->is('app/email-log*')) ||
            (request()->is('app/email-configaration*')) ? 'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="menu-title text-truncate">Email/Sms</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/send-bulk-sms*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('send-bulk-sms') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Send Bulk
                            Sms</span></a> </li>
                <li class="{{ (request()->is('app/send-single-sms*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('send-single-sms') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Send
                            Single
                            Sms</span></a> </li>
                <li class="{{ (request()->is('app/sms-pannel*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('sms-pannel') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Sms
                            Pannel</span></a> </li>
                <li class="{{ (request()->is('app/sms-template*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('sms-template') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Sms
                            Template</span></a> </li>
                <li class="{{ (request()->is('email-template*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('email-template') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Email
                            Template</span></a> </li>
                <li class="{{ (request()->is('app/sms-log*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('sms-log') }}"><i data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Alerts">Sms Log</span></a> </li>
                <li class="{{ (request()->is('app/send-bulk-email*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('send-bulk-email') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Send Bulk
                            Email</span></a> </li>
                <li class="{{ (request()->is('app/email-log*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('email-log') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">Email
                            Log</span></a> </li>
                <li class="{{ (request()->is('app/email-configaration*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('email-configaration') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Email
                            Configaration</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/general/reporting*')) ? 'sidebar-group-active open' : '' }}>
            <a href="{{route('reporting')}}" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-edit-2">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                <span class="menu-title text-truncate">Reporting</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-key">
                    <path
                        d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                    </path>
                </svg>
                <span class="menu-title text-truncate">Security Claim</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/policy-notify*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('policy-notify') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Police
                            Notify</span></a> </li>
                <li class="{{ (request()->is('app/crime-record*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('crime-record') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Crime
                            Record</span></a> </li>
                <li class="{{ (request()->is('app/essential-law*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('essential-law') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Essential
                            Law</span></a> </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('communication')}}" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-command">
                    <path
                        d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                    </path>
                </svg>
                <span class="menu-title text-truncate">Communication</span>
            </a>
        </li>
        <li class="nav-item" {{ (request()->is('app/manage-company*')) || (request()->is('app/vat-and-taxes*')) ?
            'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <i data-feather="briefcase"></i>
                <span class="menu-title text-truncate">Company</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/manage-company*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('manage-company') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Manage
                            Company</span></a> </li>
            </ul>
        </li>

        <li class="nav-item" {{ (request()->is('app/check-list*')) || (request()->is('app/room-qr-code*')) ||
            (request()->is('app/room-cleaning*')) || (request()->is('app/londry-service*')) ? 'sidebar-group-active open' :
            '' }}>
            <a href="" class="d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span class="menu-title text-truncate">House Keeping</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('house-keeper*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('house-keeper.index') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">House Keeper</span></a>
                </li>
                <li class="{{ (request()->is('app/check-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('assign-room') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Assign
                            Room
                            Cleaning</span></a>
                </li>
                <li class="{{ (request()->is('app/check-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('check-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Check
                            List</span></a> </li>
                <li class="{{ (request()->is('app/room-qr-code*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('room-qr-code') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Room QR
                            Code</span></a> </li>
                <li class="{{ (request()->is('app/room-cleaning*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('room-cleaning') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Room
                            Cleaning</span></a> </li>
                <li class="{{ (request()->is('app/londry-service*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('londry-service') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Londry
                            Service</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/vechile-list*')) || (request()->is('app/new-vechile*')) ||
            (request()->is('app/booking-list*')) ? 'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-truck">
                    <rect x="1" y="3" width="15" height="13"></rect>
                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
                <span class="menu-title text-truncate">Transport Facalities</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/vechile-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('vechile-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Vechile
                            List</span></a> </li>
                <li class="{{ (request()->is('app/booking-list*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('booking-list') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Booking
                            List</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/all-users*')) ||
            (request()->is('app/role-list*')) || (request()->is('app/permission-setup*')) ? 'sidebar-group-active open' : ''
            }}>
            <a href="" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="menu-title text-truncate">Users</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/all-users*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('all-users') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">All Users</span></a> </li>
                <li class="{{ (request()->is('app/role-list*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('role-list') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Alerts">Role List</span></a> </li>
                <li class="{{ (request()->is('app/permission-setup*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('permission-setup') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="Avatar">Permission
                            Setup</span></a> </li>
            </ul>
        </li>
        <li class="nav-item" {{ (request()->is('app/direct-chat*')) || (request()->is('app/email-us*')) ||
            (request()->is('app/help-line*')) ? 'sidebar-group-active open' : '' }}>
            <a href="" class="d-flex align-items-center">
                <i data-feather="life-buoy"></i>
                <span class="menu-title text-truncate">Support</span>
            </a>
            <ul class="menu-content">
                <li class="{{ (request()->is('app/direct-chat*')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('direct-chat') }}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Direct
                            Chat</span></a> </li>
                <li class="{{ (request()->is('app/email-us*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('email-us') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Avatar">Email-Us</span></a> </li>
                <li class="{{ (request()->is('app/help-line*')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('help-line') }}"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="Avatar">Help Line</span></a> </li>
            </ul>
        </li>
        <!-- <li class="nav-item">
            <a href="{{route('faq')}}" class="d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-frown">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
                <span class="menu-title text-truncate">FAQ</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="{{route('controller')}}" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user-check">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>

                    <circle cx="8.5" cy="7" r="4"></circle>
                    <polyline points="17 11 19 13 23 9"></polyline>
                </svg>

                <span class="menu-title text-truncate">Controller</span>





            </a>
    </ul>
</ul>