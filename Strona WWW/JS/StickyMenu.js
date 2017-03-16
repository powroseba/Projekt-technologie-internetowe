$(function(){
    $(window).scroll(function() {
		if ( $(window).width() >= 950){
			if (($(this).scrollTop() >= 254)) {
				$('.menu').addClass('sticky');
				$('.menumniejsze').addClass('sticky');
			}
			else {
				$('.menu').removeClass('sticky'); 
				$('.menumniejsze').removeClass('sticky');
			}
		}
		else if (( $(window).width() < 950)&&( $(window).width() >= 600)){
			if (($(this).scrollTop() >= 200)) {
				$('.menu').addClass('sticky');
				$('.menumniejsze').addClass('sticky');
			}
			else {
				$('.menu').removeClass('sticky'); 
				$('.menumniejsze').removeClass('sticky');
			}
		}
		else if (( $(window).width() < 600)&&( $(window).width() >= 450)){
			if (($(this).scrollTop() >= 200)) {
				$('.menu').addClass('sticky');
				$('.menumniejsze').addClass('sticky');
			}
			else {
				$('.menu').removeClass('sticky'); 
				$('.menumniejsze').removeClass('sticky');
			}
		}
		else{
			if (($(this).scrollTop() >= 120)) {
				$('.menu').addClass('sticky');
				$('.menumniejsze').addClass('sticky');
			}
			else {
				$('.menu').removeClass('sticky'); 
				$('.menumniejsze').removeClass('sticky');
			}
		}
			
    });
});