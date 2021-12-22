<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">>
@include('admins.layouts.head')


<body class="fix-sidebar fix-header card-no-border">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
@include('admins.layouts.header')
@include('admins.layouts.sidebar')

<!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        @yield('wrapper')
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@include('admins.layouts.custom-js')
@stack('modals')
@include('admins.layouts.script')

@if(!in_array(Request()->route()->getName(), ['enterprises.create', 'enterprises.edit', 'enterprises.show', 'districts.create', 'districts.edit', 'districts.create', 'districts.index', 'orders.create', 'orders.edit']))
{{--
@include('admins.layouts.extendables.heatMap')
--}}
@endif

{{--<script>
    $('#test').on('click', function () {
        window.location.hash = '?tab=1';
        return false;
    });
</script>--}}
</body>
</html>
