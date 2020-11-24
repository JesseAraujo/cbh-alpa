$(function(){   
	var nav = $('#nav');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 800) { 
			nav.addClass("menu-fixo");
			$('body').css('padding-top', 300);
		} else { 
			nav.removeClass("menu-fixo"); 
			$('body').css('padding-top', 0);
		} 
	});  
});