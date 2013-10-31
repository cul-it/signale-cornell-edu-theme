function mycarousel_initCallback(carousel) {
	jQuery('.jcarousel-control a').bind('click',function(){
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
		return false;
	});

	jQuery('.jcarousel-next').bind('click',function() {
	carousel.next();
	return false;
	});

	jQuery('.jcarousel-prev').bind('click', function(){
	carousel.prev();
	return false;
	});
}

jQuery(document).ready(function() {
	jQuery(".jcarousel-skin-default").jcarousel({
		scroll:1,
		initCallback: mycarousel_initCallback,
		buttonNextHTML: null,
		buttonPrevHTML:null
	});
})