<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials._head')
</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.partials._topbar')
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.partials._sidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <p>© Hands - {{ date('Y') }}</p>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar -->
    @include('layouts.partials._right_sidebar')
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay">
    </div>
    <!-- JAVASCRIPT -->
    @include('layouts.partials._scripts')
    @stack('js')
</body>

</html>
