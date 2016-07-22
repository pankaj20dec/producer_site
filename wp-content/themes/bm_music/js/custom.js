var wheight, wwidth, hheight,fheight,mheight,slideMargin,minSlides,maxSlides;
jQuery(document).ready(function(){
	size();
	wwidth = jQuery(window).width();

	 jQuery('.video-slider').bxSlider({
		 pager: false,
		 controls: true
	 });
	 
	 jQuery('.scroll-top').click(function(){
		jQuery('html,body').animate({
			scrollTop: 0
		},600)
	 });
	 jQuery('.scroll-down a').click(function(e){
		e.preventDefault();
		var href = jQuery(this).attr("href");
		var $href = jQuery(href).offset().top;
		jQuery('html,body').animate({
			scrollTop: $href
		},600) 
	 });
	jQuery('ul.menu li a').click(function(e){
		//e.preventDefault();
		var parent = jQuery(this).parent();
		jQuery('ul.menu li').removeClass('current');
			if(parent.hasClass('current')){
				parent.removeClass('current');
			}else{
				parent.addClass('current');
			}
		jQuery('#menu-container').fadeOut();
		jQuery('body').removeClass('overflow-hide');
			var url = jQuery(this).attr("href");
			var indexed = url.indexOf("#");
			var hashTag = url.substr(url.indexOf("#"));
		console.log(indexed);
		if(indexed > -1){
			e.preventDefault();
			if(jQuery(hashTag).length){
			var $href = jQuery(hashTag).offset().top;
			jQuery('html,body').animate({
				scrollTop: $href
			},600)
			}else{
				window.location.href = url;
			}
		}
	});
	jQuery('ul.menu li a').each(function(){
		var urls = jQuery(this).attr("href");
		if(urls == window.location.href){
			var parent = jQuery(this).parent();
			if(parent.hasClass('current')){
				parent.removeClass('current');
			}else{
				parent.addClass('current');
			}
		}
	});
	//jQuery('#header').scrollToFixed();	
	
	/************ Mobile menu  ***************/
	jQuery('.mobile-menu a').click(function(){
		jQuery('#menu-container').fadeIn(600);
		jQuery('body').addClass('overflow-hide');
	});
	jQuery('.close').click(function(){
		jQuery('#menu-container').fadeOut(600);
		jQuery('body').removeClass('overflow-hide');
	});
	
});

jQuery(window).scroll(function(){
	 if(jQuery(window).scrollTop() > 100){
		 jQuery('.scroll-top').fadeIn(); 
	 }else{
		  jQuery('.scroll-top').fadeOut();
	 }
	 jQuery('ul.menu li a').each(function(){
		//jQuery('ul.menu li').removeClass('current');
		var parent = jQuery(this).parent();
		var urls = jQuery(this).attr("href");
		var hash = urls.substr(urls.indexOf("#"));
			if(jQuery(hash).length){
				var $hash = jQuery(hash).offset().top;
				if(jQuery(window).scrollTop() >= $hash - 70){
					    jQuery('ul.menu li.current').removeClass('current');
						jQuery("ul.menu li a[href='"+urls+"']").parent().addClass('current');
					}else{
						jQuery("ul.menu li a[href='"+urls+"']").parent().removeClass('current');
					}
				}	
	});
 });
jQuery(window).load(function(){
	size();
	if(jQuery(window).width() < 767){  
		jQuery('.slider2').bxSlider({
		slideWidth: 520,
		minSlides: 1,
		maxSlides: 1,
		slideMargin: 70
	  });
	  }else{
		jQuery('.slider2').bxSlider({
		slideWidth: 900,
		minSlides: 1,
		maxSlides: 1,
		pager: false
	  });  
	  }
});
jQuery(window).resize(function(){
	size();
});

function size(){
	hheight = jQuery('#header').outerHeight();
	fheight = jQuery('#footer').outerHeight();
	wheight = jQuery(window).height();
	theight = jQuery(window).height() - 85;
	jQuery('.wheight').css({'height':wheight});
	jQuery('.theight').css({'height':theight});
	jQuery('.cheight').css({'height':wheight - fheight});
	jQuery('.mheight').css({'min-height':wheight});
}