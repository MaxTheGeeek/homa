<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.header')

<body class="animsition">

    @include('dashboard.layouts.sidebar')

       <!-- PAGE CONTAINER-->
    <div class="page-wrapper">
        <div class="page-container2">
            @include('dashboard.layouts.headerDesktop')

            @include('dashboard.layouts.breadcrumb')

            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    @include('dashboard.layouts.footer')

</body>

</html>
<!-- end document-->
