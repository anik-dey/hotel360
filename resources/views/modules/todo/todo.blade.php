@extends('layouts.master')
@section('title', 'Todo')
@push('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/editors/quill/katex.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/dragula.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/toastr.min.css')}}">

<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-quill-editor.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-todo.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
<!-- END: Custom CSS-->
@endpush
@section('content')
<!-- BEGIN: Content-->
<div class="app-content todo-application">
    <div class="content-area-wrapper container-xxl p-0 ">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar">
                    <div class="todo-app-menu">
                        <div class="add-task">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#new-task-modal">
                                Add Task
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-filters">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle"> My Task</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 mr-50"></i> <span
                                        class="align-middle">Important</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="check" class="font-medium-3 mr-50"></i> <span
                                        class="align-middle">Completed</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 mr-50"></i> <span
                                        class="align-middle">Deleted</span>
                                </a>
                            </div>
                            <div class="mt-3 px-2 d-flex justify-content-between">
                                <h6 class="section-label mb-1">Priority</h6>
                                <i data-feather="plus" class="cursor-pointer"></i>
                            </div>
                            <div class="list-group list-group-labels">
                                <a href="javascript:void(0)"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-success mr-1"></span>Low
                                </a>
                                <a href="javascript:void(0)"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-primary mr-1"></span>Medium
                                </a>
                                <a href="javascript:void(0)"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-warning mr-1"></span>High
                                </a>
                                <a href="javascript:void(0)"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger mr-1"></span>Urgent
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <div class="todo-app-list">
                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ml-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="search"
                                                class="text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search task"
                                        aria-label="Search..." aria-describedby="todo-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->

                        <!-- Todo List starts -->
                        <div class="todo-task-list-wrapper list-group">
                            <ul class="todo-task-list media-list" id="todo-task-list">
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" />
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                                <span class="todo-title" data-toggle="modal"
                                                    data-target="#update-task-modal">Fix Responsiveness for new
                                                    structure
                                                    💻</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 08</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-4.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck2" />
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                                <span class="todo-title" data-toggle="modal"
                                                    data-target="#update-task-modal">Plan a party for development team
                                                    🎁</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-warning">High</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 30</small>
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content">MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck3" />
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                                <span class="todo-title">Hire 5 new Fresher or Experienced, frontend
                                                    and backend developers </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-5.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck4" checked />
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                                <span class="todo-title">Skype Tommy for project status &
                                                    report</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-danger">Urgent</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 18</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-5.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck5" />
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                                <span class="todo-title">Send PPT with real-time reports</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 22</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LM</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck6" />
                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                                <span class="todo-title">Submit quotation for Abid's ecommerce
                                                    website and admin project </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 24</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck7" checked />
                                                    <label class="custom-control-label" for="customCheck7"></label>
                                                </div>
                                                <span class="todo-title">Reminder to mail clients for
                                                    holidays</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-4.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck8" />
                                                    <label class="custom-control-label" for="customCheck8"></label>
                                                </div>
                                                <span class="todo-title">Refactor Code and fix the bugs and test it
                                                    on server </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">KL</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck9" />
                                                    <label class="custom-control-label" for="customCheck9"></label>
                                                </div>
                                                <span class="todo-title">List out all the SEO resources and send it
                                                    to new SEO team. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Sept 15</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck10" />
                                                    <label class="custom-control-label" for="customCheck10"></label>
                                                </div>
                                                <span class="todo-title">Finish documentation and make it
                                                    live</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-7.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck11" checked />
                                                    <label class="custom-control-label" for="customCheck11"></label>
                                                </div>
                                                <span class="todo-title">Pick up Nats from her school and drop at
                                                    dance class😁 </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Aug 17</small>
                                            <div class="avatar bg-light-primary">
                                                <div class="avatar-content">PK</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck12" />
                                                    <label class="custom-control-label" for="customCheck12"></label>
                                                </div>
                                                <span class="todo-title">Plan new dashboard design with design team
                                                    for Google app store. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-info">Update</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 02</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LO</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck13" />
                                                    <label class="custom-control-label" for="customCheck13"></label>
                                                </div>
                                                <span class="todo-title">Conduct a mini awareness meeting regarding
                                                    health care. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Sept 05</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-17.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck14" checked />
                                                    <label class="custom-control-label" for="customCheck14"></label>
                                                </div>
                                                <span class="todo-title">Test functionality of apps developed by dev
                                                    team for enhancements. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-danger">High</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 07</small>
                                            <div class="avatar bg-light-info">
                                                <div class="avatar-content">VB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck15" />
                                                    <label class="custom-control-label" for="customCheck15"></label>
                                                </div>
                                                <span class="todo-title">Answer the support tickets and close
                                                    completed tickets. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Frontend</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 12</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">SW</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck16" />
                                                    <label class="custom-control-label" for="customCheck16"></label>
                                                </div>
                                                <span class="todo-title">Meet Jane and ask for coffee ❤️</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-info">Update</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 10</small>
                                            <div class="avatar">
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-2.jpg')}}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div>
                        </div>
                        <!-- Todo List ends -->
                    </div>
                    <div class="modal modal-slide-in fade" id="new-task-modal" aria-hidden="true">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title">
                                        <span class="align-middle">Add Task</span>
                                    </h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <form id="form">
                                        <div class="action-tags">
                                            <div class="form-group">
                                                <label for="todoTitleAdd" class="form-label">Title</label>
                                                <input type="text" id="todoTitleAdd" name="todoTitleAdd"
                                                    class="new-todo-item-title form-control" placeholder="Title" />
                                            </div>
                                            <div class="form-group position-relative">
                                                <label for="task-assigned" class="form-label d-block">Assignee</label>
                                                <select class="select2 form-control" multiple>
                                                    <optgroup label="Task Assign To">
                                                        <option value="CA">Din Islam</option>
                                                        <option value="NV">Anik</option>
                                                        <option value="OR">Sabber</option>
                                                        <option value="WA">Jabil</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="task-due-date" class="form-label">Due Date</label>
                                                <input type="text" class="form-control task-due-date" id="task-due-date"
                                                    name="task-due-date" />
                                            </div>
                                            <div class="form-group position-relative">
                                                <label for="task-assigned" class="form-label d-block">Priority</label>
                                                <select class="select2 form-control" id="priority" name="priority">
                                                    <option value="Low">
                                                        Low
                                                    </option>
                                                    <option value="Medium">
                                                        Medium
                                                    </option>
                                                    <option value="High">
                                                        High
                                                    </option>
                                                    <option value="Urgent">
                                                        Urgent
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Description</label>
                                                <div id="task-desc" class="border-bottom-0"
                                                    data-placeholder="Write Your Description"></div>
                                                <div class="d-flex justify-content-end desc-toolbar border-top-0">
                                                    <span class="ql-formats mr-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-align"></button>
                                                        <button class="ql-link"></button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Document Upload</label>
                                                <input type="file">
                                            </div>
                                            <div class="form-group my-1">
                                                <button type="submit"
                                                    class="btn btn-primary d-none add-todo-item mr-1">Add</button>
                                                <button type="button"
                                                    class="btn btn-outline-secondary add-todo-item d-none"
                                                    data-dismiss="modal">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal modal-slide-in fade" id="update-task-modal">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Floor</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label for="todoTitleAdd" class="form-label">Title</label>
                                        <input type="text" id="todoTitleAdd" name="todoTitleAdd"
                                            class="new-todo-item-title form-control" placeholder="Title" />
                                    </div>
                                    <div class="form-group position-relative">
                                        <label for="task-assigned" class="form-label d-block">Assigned To</label>
                                        <select class="select2 form-control" multiple>
                                            <optgroup label="Task Assign To">
                                                <option value="CA">Din Islam</option>
                                                <option value="NV">Anik</option>
                                                <option value="OR">Sabber</option>
                                                <option value="WA">Jabil</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="todoTitleAdd" class="form-label">Assiged By</label>
                                        <input type="text" id="todoTitleAdd" name="assign_by"
                                            class="new-todo-item-title form-control" value="Mr Mahfuz" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="todoTitleAdd" class="form-label">Assiged Date</label>
                                        <input type="text" id="todoTitleAdd" name="assign_date"
                                            class="new-todo-item-title form-control" value="12-02-2022" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="task-due-date" class="form-label">Due Date</label>
                                        <input type="text" class="form-control task-due-date" id="task-due-date"
                                            name="task-due-date" />
                                    </div>
                                    <div class="form-group position-relative">
                                        <label for="task-assigned" class="form-label d-block">Priority</label>
                                        <select class="select2 form-control" id="priority-update" name="priority">
                                            <option value="Low">
                                                Low
                                            </option>
                                            <option value="Medium">
                                                Medium
                                            </option>
                                            <option value="High">
                                                High
                                            </option>
                                            <option value="Urgent">
                                                Urgent
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Document Upload</label>
                                        <input type="file">
                                    </div>
                                    <button type="submit" class="btn btn-primary data-submit mr-1">Update</button>
                                    <button type="reset" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- BEGIN: Vendor JS-->

<script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/extensions/dragula.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('backend/app-assets/js/scripts/pages/app-todo.js')}}"></script>
<!-- END: Page JS-->
</body>

@endsection