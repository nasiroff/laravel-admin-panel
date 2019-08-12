<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('assets/images/favicon.png') !!}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/extra-libs/multicheck/multicheck.css') !!}">
    <link href="{!! asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.min.css') !!}" rel="stylesheet">
</head>

<body>
<div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="{!! url('') !!}">
                    <b class="logo-icon p-l-10">
                        <img src="{!! asset('assets/images/logo-icon.png') !!}" alt="homepage" class="light-logo"/>
                    </b>
                    <span class="logo-text">
                             <img src="{!! asset('assets/images/logo-text.png') !!}" alt="homepage" class="light-logo"/>
                        </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                                                              href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                                class="mdi mdi-menu font-24"></i></a></li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-danger waves-effect waves-dark pro-pic color"
                           href="{!! url('/logout') !!}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="{{ url("/") }}" aria-expanded="false"><i
                                class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                                href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-receipt"></i><span class="hide-menu">Employee </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ url('/employee') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Employee list </span></a>
                            </li>
                            @if (\Illuminate\Support\Facades\Auth::user()->role_id < \App\Constants\RoleConstants::ROLE_MANAGER)
                                <li class="sidebar-item"><a href="{{ url('/employee/create') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span
                                            class="hide-menu"> Create new employee </span></a></li>
                            @endif
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                                href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-receipt"></i><span class="hide-menu"> Department </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ url('/department') }}" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span
                                        class="hide-menu"> Department list </span></a></li>
                            @if (\Illuminate\Support\Facades\Auth::user()->role_id < \App\Constants\RoleConstants::ROLE_MANAGER)
                                <li class="sidebar-item"><a href="{{ url('/department/create') }}" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span
                                            class="hide-menu"> Create new department </span></a></li>
                            @endif
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
@yield('content')
