// Date Picker
jQuery('#from_created_at').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom',
});

jQuery('.date-picker-popup').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom',
});

jQuery('#to_created_at').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom'
});

jQuery('#from_updated_at').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom'
});

jQuery('#to_updated_at').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom'
});

$('#from_time').clockpicker({
    donetext: 'Done',
}).find('input').change(function () {
    console.log(this.value);
});
$('#to_time').clockpicker({
    donetext: 'Done',
}).find('input').change(function () {
    console.log(this.value);
});

// Date Picker
jQuery('#from_delivery_date_without').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom',
});

jQuery('#to_delivery_date_without').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom'
});

jQuery('.financial-time-picker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    orientation: 'bottom'
});

jQuery('.financial-date-time-picker').datetimepicker({
    autoclose: true,
    format: 'yyyy-mm-dd hh:ii',
    todayHighlight: true,
    orientation: 'bottom'
});

jQuery('.time-picker').clockpicker({
    donetext: 'Done'
}).find('input').change(function () {
    console.log(this.value);
});
