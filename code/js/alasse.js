jQuery(document).ready(function($) {
	jQuery('.alasse-toolbar-switch').click(function (b) {
		var toolbarHeight = jQuery('#nav-toolbar').height();

		if (jQuery('.wrappToolbar').hasClass('collapsedToolbar')) {

			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate({
				height: toolbarHeight + 'px'
			},700, function() {
				jQuery('.wrappToolbar.collapsedToolbar').removeClass('collapsedToolbar')
				jQuery('.wrappToolbar .alasse-toolbar-container').removeClass('collapsedToolbarInner');
			});
			jQuery(this).animate({top: toolbarHeight + 'px'}, 700);
		}
		else {
			jQuery('.wrappToolbar').addClass('collapsedToolbar');
			jQuery('.wrappToolbar.collapsedToolbar .alasse-toolbar-container').addClass('collapsedToolbarInner');
			jQuery(this).animate({top: '0'}, 700 );
			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate({
				height: '0px'
			},700);
		}
		jQuery('.wrappToolbar .wrapper-toolbar').css({minHeight: toolbarHeight + 'px'});
	});
});
