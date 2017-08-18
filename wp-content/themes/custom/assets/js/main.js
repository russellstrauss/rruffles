

jQuery('video').wrap('<div class="video-structure"></div>');
jQuery('.video-structure').append('<div class="video-thumbnail-play"></div>');

jQuery('video').each(function(){
	var video = jQuery(this)[0];
	video.addEventListener('play', function () {
		jQuery(this).closest('.video-structure').find('.video-thumbnail-play').hide();
	});
	video.addEventListener('pause', function () {
		jQuery(this).closest('.video-structure').find('.video-thumbnail-play').show();
	});
});

jQuery('video, .video-thumbnail-play').on('click', function(){
	
	var video;
	if (jQuery(this).hasClass('video-thumbnail-play')) {
		video = jQuery(this).closest('.video-structure').find('video')[0];
	}
	else {
		video = jQuery(this)[0];
	}
	jQuery(this).attr('controls', 'controls');

	if (video.currentTime > 0 && !video.paused) {
		video.pause();
	}
	else {
		video.play();
	}
});

jQuery('video').on('dblclick', function(){
	var video = jQuery(this)[0];

	if (typeof video.webkitEnterFullScreen === "function"){
		video.webkitEnterFullScreen();
		video.play();
	}
	else if (typeof video.mozRequestFullScreen === "function"){
		video.mozRequestFullScreen();
		video.play();
	}
	else {
		jQuery(this).attr('controls', 'controls');
	}

	
	
});