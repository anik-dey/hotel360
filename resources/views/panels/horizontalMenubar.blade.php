<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="../../../html/ltr/horizontal-menu-template-dark/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item" data-menu="">
                    <a class="nav-link d-flex align-items-center" href="{{ route('home') }}" data-toggle=""><i
                            data-feather="home"></i><span data-i18n="Pages">Home</span>
                    </a>
                </li>
                <li class="nav-item" data-menu="">
                    <a class="nav-link d-flex align-items-center" href="{{ route('properties.index') }}"><i
                            data-feather='briefcase'></i><span>
                            Properties</span></a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i
                            data-feather="package"></i><span data-i18n="Apps">Room
                            Setting</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('app/floor-list')) ? 'active' : '' }}"
                                href="{{ route('floor-list.index') }}" data-toggle="dropdown"
                                data-i18n="File Manager"><i data-feather="save"></i><span data-i18n="save">Floors
                                    List</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('app/room-list')) ? 'active' : '' }}"
                                href="{{ route('room-list.index') }}" data-toggle="dropdown" data-i18n="File Manager"><i
                                    data-feather="save"></i><span data-i18n="File Manager">Room
                                    List</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/bed-list')) ? 'active' : '' }}"
                                href="{{ route('bed-list.index') }}" data-toggle="dropdown" data-i18n="Chat"><i
                                    data-feather="message-square"></i><span data-i18n="Chat">Bed
                                    List</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/room-amenities')) ? 'active' : '' }}"
                                href="{{ route('room-amenities.index') }}" data-toggle="dropdown" data-i18n="Email"><i
                                    data-feather="mail"></i><span data-i18n="Email">Amenities</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/booking-type-list')) ? 'active' : '' }}"
                                href="{{ route('booking-type-list.index') }}" data-toggle="dropdown" data-i18n="Todo"><i
                                    data-feather="check-square"></i><span data-i18n="Todo">Booking Type
                                    List</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/booking-source')) ? 'active' : '' }}"
                                href="{{ route('booking-source.index') }}" data-toggle="dropdown"
                                data-i18n="Calendar"><i data-feather="calendar"></i><span data-i18n="Calendar">Booking
                                    Source</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/complementary')) ? 'active' : '' }}"
                                href="{{ route('complementary.index') }}" data-toggle="dropdown" data-i18n="Kanban"><i
                                    data-feather="grid"></i><span data-i18n="Kanban">Complementary</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/promocode')) ? 'active' : '' }}"
                                href="{{ route('promocode.index') }}" data-toggle="dropdown" data-i18n="File Manager"><i
                                    data-feather="save"></i><span data-i18n="File Manager">Promocode</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i
                            data-feather="layers"></i><span data-i18n="User Interface">House Keeping</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/unit')) ? 'active' : '' }}"
                                href="{{ route('unit.index') }}" data-toggle="dropdown" data-i18n="Colors"><i
                                    data-feather="droplet"></i><span data-i18n="Colors">Unit</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/status')) ? 'active' : '' }}"
                                href="{{route('status.index')}}" data-toggle="dropdown" data-i18n="Feather"><i
                                    data-feather="box"></i><span data-i18n="Feather">Status</span></a>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ (request()->is('configuration/remarks')) ? 'active' : '' }}"
                                href="{{route('remarks.index')}}" data-toggle="dropdown" data-i18n="Feather"><i
                                    data-feather="briefcase"></i><span data-i18n="Feather">Remarks</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item {{request()->is('configuration/general/pay-method') || ('configuration/general/pay-method') ||('configuration/general/extra-charge') ? 'sidebar-group-active':'' }}"
                    data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                        data-toggle="dropdown"><i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Master
                        </span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle {{ (request()->is('configuration/general/pay-method')) ? 'active' : '' }}"
                                href="#" data-toggle="dropdown" data-i18n="Form Elements"><i
                                    data-feather="copy"></i><span data-i18n="Form Elements">General</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center {{ request()->is('configuration/general/pay-method') ? 'active':'' }}"
                                        href="{{ route('pay-method.index') }}" data-toggle="dropdown"
                                        data-i18n="Input Groups"><i data-feather="circle"></i><span
                                            data-i18n="Input Groups">Pay
                                            Method</span></a>
                                </li>
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center{{ request()->is('configuration/general/extra-charge') ? 'active':'' }} "
                                        href="{{ route('extra-charge.index') }}" data-toggle="dropdown"
                                        data-i18n="Input Mask"><i data-feather="circle"></i><span
                                            data-i18n="Input Mask">Extra
                                            Charge</span></a>
                                </li>
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center {{ request()->is('configuration/general/identity-type') ? 'active':'' }}"
                                        href="{{ route('identity-type.index') }}" data-toggle="dropdown"
                                        data-i18n="Checkbox"><i data-feather="circle"></i><span
                                            data-i18n="Checkbox">Identity
                                            Type</span></a>
                                </li>
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center {{ request()->is('configuration/general/reservation-type') ? 'active':'' }}"
                                        href="{{ route('reservation-type.index') }}" data-toggle="dropdown"
                                        data-i18n="Select"><i data-feather="circle"></i><span
                                            data-i18n="Select">Reservation
                                            Type</span></a>
                                </li>
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center {{ request()->is('configuration/general/meal-plan') ? 'active':'' }}"
                                        href="{{ route('meal-plan.index') }}" data-toggle="dropdown"
                                        data-i18n="File Uploader"><i data-feather="circle"></i><span
                                            data-i18n="File Uploader">Meal Plan</span></a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a
                                class="dropdown-item d-flex align-items-center {{ request()->is('app/email-template') ? 'active':'' }}"
                                href="{{ route('app.email-template') }}" data-toggle="dropdown"
                                data-i18n="Input Groups"><i data-feather='inbox'></i><span
                                    data-i18n="Input Groups">Email Template</span></a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown" data-i18n="Form Elements"><i
                                    data-feather='alert-octagon'></i><span data-i18n="Form Elements">Reasons</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a
                                        class="dropdown-item d-flex align-items-center {{ request()->is('app/reasons/reason') ? 'active':'' }}"
                                        href="{{ route('reasons.reason') }}" data-toggle="dropdown" data-i18n="Input"><i
                                            data-feather="circle"></i><span data-i18n="Input">Reason</span></a>
                                </li>
                                <li data-menu=""><a href="{{ route('reasons.blacklist-reason') }}"
                                        data-toggle="dropdown" data-i18n="Input Groups"><i
                                            data-feather="circle"></i><span data-i18n="Input Groups">Black List
                                            Reason</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{request()->is('app/settings/feedback') ? 'active':''}}">
                            <a class=" dropdown-item d-flex align-items-center" href="{{ route('settings.feedback') }}"
                                data-toggle="dropdown" data-i18n="Second Level"><i data-feather='headphones'></i><span
                                    data-i18n="Second Level">Feedback</span>
                            </a>
                        </li>
                        <li class="{{request()->is('app/settings/loyalty') ? 'active' : ''}}">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('settings.loyalty') }}"
                                data-toggle="dropdown" data-i18n="Second Level"><i data-feather='heart'></i><span
                                    data-i18n="Second Level">Loyalty
                                    Setting</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item {{ request()->is('configuration/payment-settings') ? 'active':'' }}">
                    <a class="nav-link d-flex align-items-center" href="
                                        {{route('payment-settings.index')}}"><i data-feather='send'></i><span
                            data-i18n="Pages">Payment
                            Gateway</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('configuration/notice') ? 'active':'' }}" data-menu=""><a
                        class="nav-link d-flex align-items-center" href="{{ route('notice.index') }}" data-toggle=""><i
                            data-feather="help-circle"></i><span data-i18n="Pages">Notice</span></a>
                </li>
                <li class=" nav-item {{ request()->is('system/common-settings') ? 'active':'' }}">
                    <a class="nav-link d-flex align-items-center" href="
                        {{route('common-settings.index')}}"><i data-feather='globe'></i><span data-i18n="Pages">Common
                            Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
