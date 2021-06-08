<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <!-- ======= Top Bar and Nav ======= -->
    @include('layouts.nav')

    <!-- ======= Intro Section ======= -->
    @include('layouts.intro')

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('layouts.footer')

</body>

</html>
