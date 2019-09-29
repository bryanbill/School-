jQuery(document).ready(function($) {
	$('#pics_carousel').flexslider({
		animation: "slide",
		controlNav: true,
        directionNav: false,
		animationLoop: false,
		slideshow: true,
		itemWidth: 140,
		itemMargin: 10,
		maxItems: 3,
		minItems: 4,
		asNavFor: '#pics_slider'
	});

	$('#pics_slider').flexslider({
		animation: "slide",
		controlNav: false,
        directionNav: true,
		animationLoop: false,
		slideshow: true,
		sync: "#pics_carousel"
	});

	$('#vids_carousel').flexslider({
		animation: "slide",
		controlNav: true,
        directionNav: false,
		animationLoop: false,
		slideshow: true,
		itemWidth: 140,
		itemMargin: 10,
		//maxItems: 3,
		minItems: 4,
		asNavFor: '#vids_slider'
	});

	$('#vids_slider').flexslider({
		animation: "slide",
		controlNav: false,
        directionNav: true,
		animationLoop: false,
		slideshow: true,
		sync: "#vids_carousel"
	});
	
	
	jwplayer("video_1").setup({
		flashplayer: "player.swf",
		file: "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#1) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/450/tech"
	});
	});
	$(function() {
	jwplayer("video_2").setup({
		flashplayer: "player.swf",
		file: "http://as1.asset.aparat.com/aparat-video/a_6c9nq52o0qplompnp6p3r64n60qo94n8q13qr7762169-582b__c2dbf.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#2) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/451/tech"
	});
	// repeat videos for filling...
	jwplayer("video_3").setup({
		flashplayer: "player.swf",
		file: "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#3) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/450/tech"
	});
	});
	$(function() {
	jwplayer("video_4").setup({
		flashplayer: "player.swf",
		file: "http://as1.asset.aparat.com/aparat-video/a_6c9nq52o0qplompnp6p3r64n60qo94n8q13qr7762169-582b__c2dbf.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#4) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/451/tech"
	});
	jwplayer("video_5").setup({
		flashplayer: "player.swf",
		file: "http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#5) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/450/tech"
	});
	});
	$(function() {
	jwplayer("video_6").setup({
		flashplayer: "player.swf",
		file: "http://as1.asset.aparat.com/aparat-video/a_6c9nq52o0qplompnp6p3r64n60qo94n8q13qr7762169-582b__c2dbf.mp4",
		width: 590,
		height: 400,
		stretching: "fill",
		title: "(#6) Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		image: "https://placeimg.com/610/451/tech"
	});
	
	
	
	$(".flex-direction-nav a, .gallery_content .carousel li").on("click", function() {
		$("#vids_slider ul.slides li:not('flex-active-slide')").each(function(i, obj) {
			var vid = $(this).data("vid");
			jwplayer("video_" + vid).pause(true);
		});
	});
});