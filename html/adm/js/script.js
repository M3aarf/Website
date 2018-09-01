$(document).ready(function() {
    $('.nav > li ').removeClass('active');
	var pathname = window.location.href;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})
setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 2000);
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });