function responsiveIHGallery(){
	jQuery('.ih-caption-box').css('width', '100%');
	jQuery('.ih-gallery-image').each(function() {
		var current_width = jQuery(this).width();
		var current_height = jQuery(this).height();
		var current_wraper = jQuery(this).closest('.ih-gallery-plugin');
		current_wraper.find('.ih-caption-box, .ih-caption-outer').css({
			'width': current_width,
			'height': current_height
		});
	});
}

jQuery(window).on('resize',function() {
    responsiveIHGallery();
});

jQuery(window).load(function() {
	jQuery('.wcp_loader').show();
	jQuery(window).trigger('resize');
	jQuery('.wcp_loader').hide();
});