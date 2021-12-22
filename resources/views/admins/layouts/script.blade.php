<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- <script src="../assets/plugins/moment/min/moment.min.js"></script> -->
<script src="{{asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="{{asset('assets/plugins/select2/dist/tree/select2totree.js')}}"></script>

<script src="{{asset('assets/plugins/wizard/steps.js')}}"></script>
<script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>


<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-datetimepicker-smalot/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- ============================================================== -->
<!-- Time -->
<!-- ============================================================== -->
<script src="{{asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>

{{--Date picker for createAt & UpdatedAt--}}
<script src="{{asset('js/date-picker.js')}}"></script>
<script type="text/javascript"
        src="{{asset('assets/plugins/jquery-multiple-select-bootstrap/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>


@include('admins.layouts.notification')

@stack("script")
