<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    @include('layouts.shared/head', ["page_title"=> $page_title] )

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    @yield('preloader')
    <!-- Begin page -->
    <div class="wrapper">
        @include('layouts.shared/left-sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                @include('layouts.shared/topbar')

                @yield('content')

            </div>
            <!-- content -->

            @include('layouts.shared/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    @include('layouts.shared/right-sidebar')

    @include('layouts.shared/footer-script')

    @yield('scripts')
    @livewireScripts

</body>

</html>
