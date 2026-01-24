<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        Starter Page | Admin &amp; Dashboard Template
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesbrand" name="author" />
    <base href="{{ asset('admin') }}/">

    <!-- App favicon -->
    <link href="assets/images/favicon.ico" rel="shortcut icon" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App js -->
    <script src="assets/js/plugin.js"></script>
    </link>
    </meta>
</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                         <a class="logo logo-dark" href="index.html">
                            <span class="logo-sm">
                                <img alt="" height="22" src="assets/images/logo.svg" />
                            </span>
                            <span class="logo-lg">
                                <img alt="" height="17" src="assets/images/logo-dark.png" />
                            </span>
                        </a>
                        <a class="logo logo-light" href="index.html">
                            <span class="logo-sm">
                                <img alt="" height="22" src="assets/images/logo-light.svg" />
                            </span>
                            <span class="logo-lg">
                                <img alt="" height="19" src="assets/images/logo-light.png" />
                            </span>
                        </a> 
                    </div>
                    <button class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn"
                        type="button">
                        <i class="fa fa-fw fa-bars">
                        </i>
                    </button>
                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input class="form-control" placeholder="Search..." type="text" />
                            <span class="bx bx-search-alt">
                            </span>
                        </div>
                    </form>
                    <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                        <button aria-expanded="false" aria-haspopup="false" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" type="button">
                            <span key="t-megamenu">
                                Mega Menu
                            </span>
                            <i class="mdi mdi-chevron-down">
                            </i>
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-ui-components">
                                                UI Components
                                            </h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-lightbox">
                                                        Lightbox
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-range-slider">
                                                        Range Slider
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-sweet-alert">
                                                        Sweet Alert
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-rating">
                                                        Rating
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-forms">
                                                        Forms
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tables">
                                                        Tables
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-charts">
                                                        Charts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-applications">
                                                Applications
                                            </h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-ecommerce">
                                                        Ecommerce
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-calendar">
                                                        Calendar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-email">
                                                        Email
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-projects">
                                                        Projects
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tasks">
                                                        Tasks
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-contacts">
                                                        Contacts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-extra-pages">
                                                Extra Pages
                                            </h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-light-sidebar">
                                                        Light Sidebar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-compact-sidebar">
                                                        Compact Sidebar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-horizontal">
                                                        Horizontal layout
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-maintenance">
                                                        Maintenance
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-coming-soon">
                                                        Coming Soon
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-timeline">
                                                        Timeline
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-faqs">
                                                        FAQs
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-14" key="t-ui-components">
                                                UI Components
                                            </h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-lightbox">
                                                        Lightbox
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-range-slider">
                                                        Range Slider
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-sweet-alert">
                                                        Sweet Alert
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-rating">
                                                        Rating
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-forms">
                                                        Forms
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tables">
                                                        Tables
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-charts">
                                                        Charts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-5">
                                            <div>
                                                <img alt="" class="img-fluid mx-auto d-block"
                                                    src="assets/images/megamenu-img.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button aria-expanded="false" aria-haspopup="true"
                            class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                            id="page-header-search-dropdown" type="button">
                            <i class="mdi mdi-magnify">
                            </i>
                        </button>
                        <div aria-labelledby="page-header-search-dropdown"
                            class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input aria-label="Recipient's username" class="form-control"
                                            placeholder="Search ..." type="text" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="mdi mdi-magnify">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button aria-expanded="false" aria-haspopup="true" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" type="button">
                            <img alt="Header Language" height="16" id="header-lang-img"
                                src="assets/images/flags/us.jpg" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item notify-item language" data-lang="en" href="javascript:void(0);">
                                <img alt="user-image" class="me-1" height="12"
                                    src="assets/images/flags/us.jpg" />
                                <span class="align-middle">
                                    English
                                </span>
                            </a>
                            <!-- item-->
                            <a class="dropdown-item notify-item language" data-lang="sp" href="javascript:void(0);">
                                <img alt="user-image" class="me-1" height="12"
                                    src="assets/images/flags/spain.jpg" />
                                <span class="align-middle">
                                    Spanish
                                </span>
                            </a>
                            <!-- item-->
                            <a class="dropdown-item notify-item language" data-lang="gr" href="javascript:void(0);">
                                <img alt="user-image" class="me-1" height="12"
                                    src="assets/images/flags/germany.jpg" />
                                <span class="align-middle">
                                    German
                                </span>
                            </a>
                            <!-- item-->
                            <a class="dropdown-item notify-item language" data-lang="it" href="javascript:void(0);">
                                <img alt="user-image" class="me-1" height="12"
                                    src="assets/images/flags/italy.jpg" />
                                <span class="align-middle">
                                    Italian
                                </span>
                            </a>
                            <!-- item-->
                            <a class="dropdown-item notify-item language" data-lang="ru" href="javascript:void(0);">
                                <img alt="user-image" class="me-1" height="12"
                                    src="assets/images/flags/russia.jpg" />
                                <span class="align-middle">
                                    Russian
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button aria-expanded="false" aria-haspopup="true"
                            class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" type="button">
                            <i class="bx bx-customize">
                            </i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="Github" src="assets/images/brands/github.png" />
                                            <span>
                                                GitHub
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="bitbucket" src="assets/images/brands/bitbucket.png" />
                                            <span>
                                                Bitbucket
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="dribbble" src="assets/images/brands/dribbble.png" />
                                            <span>
                                                Dribbble
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="dropbox" src="assets/images/brands/dropbox.png" />
                                            <span>
                                                Dropbox
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="mail_chimp" src="assets/images/brands/mail_chimp.png" />
                                            <span>
                                                Mail Chimp
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img alt="slack" src="assets/images/brands/slack.png" />
                                            <span>
                                                Slack
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen"
                            type="button">
                            <i class="bx bx-fullscreen">
                            </i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button aria-expanded="false" aria-haspopup="true"
                            class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                            id="page-header-notifications-dropdown" type="button">
                            <i class="bx bx-bell bx-tada">
                            </i>
                            <span class="badge bg-danger rounded-pill">
                                3
                            </span>
                        </button>
                        <div aria-labelledby="page-header-notifications-dropdown"
                            class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications">
                                            Notifications
                                        </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a class="small" href="#!" key="t-view-all">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar="" style="max-height: 230px;">
                                <a class="text-reset notification-item" href="javascript: void(0);">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart">
                                                </i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-your-order">
                                                Your order is placed
                                            </h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">
                                                    If several languages coalesce the grammar
                                                </p>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-clock-outline">
                                                    </i>
                                                    <span key="t-min-ago">
                                                        3 min ago
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="text-reset notification-item" href="javascript: void(0);">
                                    <div class="d-flex">
                                        <img alt="user-pic" class="me-3 rounded-circle avatar-xs"
                                            src="assets/images/users/avatar-3.jpg" />
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">
                                                James Lemire
                                            </h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-simplified">
                                                    It will seem like simplified English.
                                                </p>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-clock-outline">
                                                    </i>
                                                    <span key="t-hours-ago">
                                                        1 hours ago
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="text-reset notification-item" href="javascript: void(0);">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check">
                                                </i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-shipped">
                                                Your item is shipped
                                            </h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">
                                                    If several languages coalesce the grammar
                                                </p>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-clock-outline">
                                                    </i>
                                                    <span key="t-min-ago">
                                                        3 min ago
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="text-reset notification-item" href="javascript: void(0);">
                                    <div class="d-flex">
                                        <img alt="user-pic" class="me-3 rounded-circle avatar-xs"
                                            src="assets/images/users/avatar-4.jpg" />
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">
                                                Salena Layfield
                                            </h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-occidental">
                                                    As a skeptical Cambridge friend of mine occidental.
                                                </p>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-clock-outline">
                                                    </i>
                                                    <span key="t-hours-ago">
                                                        1 hours ago
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1">
                                    </i>
                                    <span key="t-view-more">
                                        View More..
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button aria-expanded="false" aria-haspopup="true" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" id="page-header-user-dropdown" type="button">
                            <img alt="Header Avatar" class="rounded-circle header-profile-user"
                                src="assets/images/users/avatar-1.jpg" />
                            <span class="d-none d-xl-inline-block ms-1" key="t-StarCode Kh">
                                StarCode Kh
                            </span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block">
                            </i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user font-size-16 align-middle me-1">
                                </i>
                                <span key="t-profile">
                                    Profile
                                </span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-wallet font-size-16 align-middle me-1">
                                </i>
                                <span key="t-my-wallet">
                                    My Wallet
                                </span>
                            </a>
                            <a class="dropdown-item d-block" href="#">
                                <span class="badge bg-success float-end">
                                    11
                                </span>
                                <i class="bx bx-wrench font-size-16 align-middle me-1">
                                </i>
                                <span key="t-settings">
                                    Settings
                                </span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-lock-open font-size-16 align-middle me-1">
                                </i>
                                <span key="t-lock-screen">
                                    Lock screen
                                </span>
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger">
                                </i>
                                <span key="t-logout">
                                    Logout
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn header-item noti-icon right-bar-toggle waves-effect" type="button">
                            <i class="bx bx-cog bx-spin">
                            </i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div class="h-100" data-simplebar="">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">
                            Menu
                        </li>
                        <li>
                            <a class="has-arrow waves-effect" href="javascript: void(0);">
                                <i class="bx bx-home-circle">
                                </i>
                                <span key="t-dashboards">
                                    Dashboards
                                </span>
                            </a>

                        </li>
                        <li>
                            <a class="waves-effect" href="javascript: void(0);">
                                <span class="badge rounded-pill bg-danger float-end" key="t-hot">
                                    Hot
                                </span>
                                <i class="bx bx-layout">
                                </i>
                                <span key="t-layouts">
                                    Layouts
                                </span>
                            </a>
                            <ul aria-expanded="true" class="sub-menu">
                                <li>
                                    <a class="has-arrow" href="javascript: void(0);" key="t-vertical">
                                        Vertical
                                    </a>
                                    <ul aria-expanded="true" class="sub-menu">
                                        <li>
                                            <a href="layouts-light-sidebar.html" key="t-light-sidebar">
                                                Light Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-compact-sidebar.html" key="t-compact-sidebar">
                                                Compact Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-icon-sidebar.html" key="t-icon-sidebar">
                                                Icon Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-boxed.html" key="t-boxed-width">
                                                Boxed Width
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-preloader.html" key="t-preloader">
                                                Preloader
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-colored-sidebar.html" key="t-colored-sidebar">
                                                Colored Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-scrollable.html" key="t-scrollable">
                                                Scrollable
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript: void(0);" key="t-horizontal">
                                        Horizontal
                                    </a>
                                    <ul aria-expanded="true" class="sub-menu">
                                        <li>
                                            <a href="layouts-horizontal.html" key="t-horizontal">
                                                Horizontal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-hori-topbar-light.html" key="t-topbar-light">
                                                Topbar light
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-hori-boxed-width.html" key="t-boxed-width">
                                                Boxed width
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-hori-preloader.html" key="t-preloader">
                                                Preloader
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-hori-colored-header.html" key="t-colored-topbar">
                                                Colored Header
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layouts-hori-scrollable.html" key="t-scrollable">
                                                Scrollable
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title" key="t-apps">
                            Apps
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Gestión de Banners</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="javascript: void(0);">Administración</a>
                                        </li>
                                        <li class="breadcrumb-item active">Banners</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h4 class="card-title mb-0">Lista de Banners</h4>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            <i class="bx bx-plus font-size-16 align-middle me-2"></i>
                                            Crear Nuevo Banner
                                        </button>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width: 60px;">ID</th>
                                                    <th>Imagen</th>
                                                    <th>Título</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                    <th>Fecha Creación</th>
                                                    <th style="width: 120px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Paginación -->
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Mostrando 1 a 5 de 5 entradas</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination pagination-rounded mb-sm-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i
                                                                class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i
                                                                class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            © StarCode Kh.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design &amp; Custom by StarCode Kh
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="h-100" data-simplebar="">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">
                <h5 class="m-0 me-2">
                    Settings
                </h5>
                <a class="right-bar-toggle ms-auto" href="javascript:void(0);">
                    <i class="mdi mdi-close noti-icon">
                    </i>
                </a>
            </div>
            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">
                Choose Layouts
            </h6>
            <div class="p-4">
                <div class="mb-2">
                    <img alt="layout images" class="img-thumbnail" src="assets/images/layouts/layout-1.jpg" />
                </div>
                <div class="form-check form-switch mb-3">
                    <input checked="" class="form-check-input theme-choice" id="light-mode-switch"
                        type="checkbox" />
                    <label class="form-check-label" for="light-mode-switch">
                        Light Mode
                    </label>
                </div>
                <div class="mb-2">
                    <img alt="layout images" class="img-thumbnail" src="assets/images/layouts/layout-2.jpg" />
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" id="dark-mode-switch" type="checkbox" />
                    <label class="form-check-label" for="dark-mode-switch">
                        Dark Mode
                    </label>
                </div>
                <div class="mb-2">
                    <img alt="layout images" class="img-thumbnail" src="assets/images/layouts/layout-3.jpg" />
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" id="rtl-mode-switch" type="checkbox" />
                    <label class="form-check-label" for="rtl-mode-switch">
                        RTL Mode
                    </label>
                </div>
                <div class="mb-2">
                    <img alt="layout images" class="img-thumbnail" src="assets/images/layouts/layout-4.jpg" />
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" id="dark-rtl-mode-switch" type="checkbox" />
                    <label class="form-check-label" for="dark-rtl-mode-switch">
                        Dark RTL Mode
                    </label>
                </div>
            </div>
        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay">
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
