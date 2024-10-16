<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>
        {{ !empty(CustomHelper::appSetting('application_setting','application_name')) ?
            CustomHelper::appSetting('application_setting','application_name') : env('APP_NAME')
            }} | Admin Panel
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/global/plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/global/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset("assets/admin/global/plugins/datatables/datatables.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset("assets/admin/global/css/components.min.css")}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset("assets/admin/global/css/plugins.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset("assets/admin/layouts/layout/css/layout.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/layouts/layout/css/themes/darkblue.min.css")}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset("assets/admin/layouts/layout/css/custom.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    @stack('stylesheets')
    <script>
        var base_url    = '{{ URL::to("/") }}';
        var current_url = '{{ url()->current() }}';
    </script>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->

    @include('admin.layouts.header')
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        @include('admin.layouts.sidebar')
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <div class="theme-panel hidden-xs hidden-sm">
                    <div class="toggler"> </div>
                    <div class="toggler-close"> </div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                            <span> THEME COLOR </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                            </ul>
                        </div>
                        <div class="theme-option">
                            <span> Theme Style </span>
                            <select class="layout-style-option form-control input-sm">
                                <option value="square" selected="selected">Square corners</option>
                                <option value="rounded">Rounded corners</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Layout </span>
                            <select class="layout-option form-control input-sm">
                                <option value="fluid" selected="selected">Fluid</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Header </span>
                            <select class="page-header-option form-control input-sm">
                                <option value="fixed" selected="selected">Fixed</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Top Menu Dropdown</span>
                            <select class="page-header-top-dropdown-style-option form-control input-sm">
                                <option value="light" selected="selected">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Mode</span>
                            <select class="sidebar-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Menu </span>
                            <select class="sidebar-menu-option form-control input-sm">
                                <option value="accordion" selected="selected">Accordion</option>
                                <option value="hover">Hover</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Style </span>
                            <select class="sidebar-style-option form-control input-sm">
                                <option value="default" selected="selected">Default</option>
                                <option value="light">Light</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-sm">
                                <option value="left" selected="selected">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Footer </span>
                            <select class="page-footer-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Tables</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Datatables</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-bell"></i> Action</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-shield"></i> Another action</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> Something else here</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bag"></i> Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Managed Datatables
                    <small>managed datatable samples</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="m-heading-1 border-green m-bordered">
                    <h3>DataTables jQuery Plugin</h3>
                    <p> DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. </p>
                    <p> For more info please check out
                        <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject bold uppercase"> Managed Table</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                        <th> Joined </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12 Jan 2012 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-left" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Blocked </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-info"> Info </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Rejected </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-info"> Info </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> goop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> toopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> tes21t </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> fop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> kop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> vopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> wap </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> toop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject bold uppercase"> Individual column searching (select inputs)</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_2_new" class="btn sbold green"> Add New
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1_2">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1_2 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                        <th> Joined </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12 Jan 2012 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-left" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Blocked </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-info"> Info </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Rejected </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-info"> Info </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> goop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> toopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> tes21t </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> fop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> kop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> vopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> wap </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> toop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                        <td class="center"> 12.12.2011 </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-docs"></i> New Post </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-tag"></i> New Comment </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-user"></i> New User </a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="icon-flag"></i> Comments
                                                            <span class="badge badge-success">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit portlet-datatable bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-green"></i>
                                    <span class="caption-subject font-green sbold uppercase">Sample Datatable</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-default"> Blocked </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-default"> Blocked </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box red">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>Table </div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                        <i class="fa fa-plus"></i> Add </a>
                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                        <i class="fa fa-print"></i> Print </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-default"> Blocked </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-default"> Blocked </span>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit portlet-datatable bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-dark"></i>
                                    <span class="caption-subject font-dark sbold uppercase">Table Footer</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_4">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_4 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Salary </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="table-checkbox"> </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Salary </th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td> $1240 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td> $2122 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td> $2324 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td> $1234 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td> $1233 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $4321 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $1244 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $5422 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $1234 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $6321 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td> $1235 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td> $2323 </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit portlet-datatable bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-red sbold uppercase">Table Footer Feedback</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th class="table-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Salary </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th colspan="3" style="text-align:right">Total:&nbsp;&nbsp;</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> shuxer </td>
                                        <td>
                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                        </td>
                                        <td> $1240 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> looper </td>
                                        <td>
                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                        </td>
                                        <td> $2122 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                        </td>
                                        <td> $2324 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> user1wow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td> $1234 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> restest </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td> $1233 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> foopl </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $4321 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> weep </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $1244 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> coop </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $5422 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> pppol </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $1234 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                        </td>
                                        <td> $6321 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> userwow </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                        </td>
                                        <td> $1235 </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td> test </td>
                                        <td>
                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                        </td>
                                        <td> $2323 </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar1.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar4.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar2.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar6.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar7.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar8.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar9.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar10.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="{{asset("assets/admin/layouts/layout/img/avatar11.jpg")}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar2.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar2.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar2.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar2.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{asset("assets/admin/layouts/layout/img/avatar3.jpg")}}" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->
<nav class="quick-nav">
    <a class="quick-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                <span>Customer Reviews</span>
                <i class="icon-users"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/showcast/" target="_blank">
                <span>Showcase</span>
                <i class="icon-user"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                <span>Changelog</span>
                <i class="icon-graph"></i>
            </a>
        </li>
    </ul>
    <span aria-hidden="true" class="quick-nav-bg"></span>
</nav>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="{{asset("assets/admin/global/plugins/respond.min.js")}}"></script>
<script src="{{asset("assets/admin/global/plugins/excanvas.min.js")}}"></script>
<script src="{{asset("assets/admin/global/plugins/ie8.fix.min.js")}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset("assets/admin/global/plugins/jquery.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/js.cookie.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/jquery.blockui.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset("assets/admin/global/scripts/datatable.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/datatables/datatables.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js")}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset("assets/admin/global/scripts/app.min.js")}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset("assets/admin/pages/scripts/table-datatables-managed.min.js")}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset("assets/admin/layouts/layout/scripts/layout.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/layouts/layout/scripts/demo.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/layouts/global/scripts/quick-sidebar.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/admin/layouts/global/scripts/quick-nav.min.js")}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>