function mycarousel_initCallback(carousel) {
	jQuery('.jacoursel-control a').bind('click',function(){
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
		return false;
	});

	jQuery('#mycarousel-next').bind('click',function() {
	carousel.next();
	return false;
	});

	jQuery('#mycarousel-prev').bind('click', function(){
	carousel.prev();
	return false;
	});
}

jQuery(document).ready(function() {
	jQuery("#mycarousel").jcarousel({
		scroll:1,
		initCallback: mycarousel_initCallback,
		buttonNextHTML: null,
		buttonPrevHTML:null
	});
})