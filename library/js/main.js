jQuery(document).ready(function() {
    var owl = $('.owl-carousel');
	owl.owlCarousel({
		loop:true,
		margin:10,
		dots:false,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		smartSpeed: 1500,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:4
			},
			1030:{
				items:4
			}
		}
	});
 });