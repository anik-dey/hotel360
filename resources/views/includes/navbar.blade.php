<!-- BEGIN: Header-->
<nav class="navbar header-navbar navbar navbar-shadow align-items-center navbar-light navbar-expand fixed-top">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip"
                        data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip"
                        data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                        data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon"
                            data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/todo" data-toggle="tooltip"
                        data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('app/document') }}"
                        data-toggle="tooltip" data-placement="top" title="Document"><i class="ficon"
                            data-feather="file-text"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="{{ route('configuration') }}" data-toggle="tooltip" data-placement="top"
                    title="Configuration"><i class="ficon" data-feather="settings"></i>
                </a>
            </li>
            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                    href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="flag-icon flag-icon-us"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                        href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i>
                        English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i
                            class="flag-icon flag-icon-fr"></i>
                        French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i
                            class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                        href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i>
                        Portuguese</a></div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="sun"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                        data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);"
                    data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-15.jpg') }}"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                            🎉</span>winner!</p><small class="notification-text"> Won the monthly best
                                        seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-3.jpg') }}"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New
                                            message</span>&nbsp;received</p><small class="notification-text"> You have
                                        10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                            👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order
                                        updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="media d-flex align-items-center">
                            <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                            <div class="custom-control custom-control-primary custom-switch">
                                <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                <label class="custom-control-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Server
                                            down</span>&nbsp;registered</p><small class="notification-text"> USA Server
                                        is down due to hight CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Sales
                                            report</span>&nbsp;generated</p><small class="notification-text"> Last month
                                        sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">

                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon"
                                                data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">High
                                            memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server
                                        using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer">
                        <a class="btn btn-primary btn-block" href="javascript:void(0)">Read
                            all notifications</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth()->user()->user_id != '')
                    @php
                    $picture=\App\Models\User::with('employees:id,profile_pic')->where('id',Auth()->user()->id)->first();
                    @endphp
                    <span class="avatar"><img class="round"
                            src="{{ asset('employee_picture/'.$picture->employees->profile_pic) }}" alt="avatar"
                            height="25" width="25"><span class="avatar-status-online"
                            title="{{ Auth::user()->name }}"></span></span>
                    @else
                    <span class="avatar">
                        <img class="round" src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                            alt="avatar" height="25" width="25" title="{{ Auth::user()->name }}"><span
                            class="avatar-status-online"></span></span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ url('page/profile') }}">
                        <i class="mr-50" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('configuration') }}">
                        <i class="mr-50" data-feather="settings"></i> Configuration
                    </a>
                    <a class="dropdown-item" href="{{ url('app/email') }}">
                        <i class="mr-50" data-feather="mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="{{ url('app/todo') }}">
                        <i class="mr-50" data-feather="check-square"></i> Task
                    </a>
                    <a class="dropdown-item" href="{{ url('app/chat') }}">
                        <i class="mr-50" data-feather="message-square"></i> Chats
                    </a>
                    <div class="dropdown-divider"></div>
                    @if(Auth()->user()->user_id != '')
                    <a class="dropdown-item" href="{{ route('account-setting.index') }}">
                        <i class="mr-50" data-feather="settings"></i> Settings
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{ url('page/pricing') }}">
                        <i class="mr-50" data-feather="credit-card"></i> Pricing
                    </a>
                    <a class="dropdown-item" href="{{ route('faq') }}">
                        <i class="mr-50" data-feather="help-circle"></i> FAQ
                    </a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                        class="dropdown-item">
                        <i class="mr-50" data-feather="power"></i> Logout
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>