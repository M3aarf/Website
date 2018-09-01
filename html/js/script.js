$(".fa-bars").click(function(){
    
     
    if($("#mob-menu").hasClass("header-mob-show"))
        {
            $("#mob-menu").removeClass("header-mob-show");
        }
    else
        {
            $("#mob-menu").addClass("header-mob-show");
        }
});


var amountScrolled = 300;

$(window).scroll(function() {
	if ( ($(window).scrollTop() > amountScrolled ) && ($( window ).width() <= 768) ) {
		 $(".suggest_article").css("display","block");
	} else {
		 $(".suggest_article").css("display","none");
	}
});
setTimeout(function() {
    $('.alert-success').fadeOut('slow');
}, 3000);
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	
