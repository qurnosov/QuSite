$(function() {

	// Progress Bar
	$("body").prognroll({
		height: 3,
		color: "#F77E87",
		custom: false
	});

});

// Up
$(function(){"use strict";$("#back-top").hide(),$(function(){$(window).scroll(function(){$(this).scrollTop()>1000?$("#back-top").removeClass("hidden").fadeIn():$("#back-top").fadeOut()})})});