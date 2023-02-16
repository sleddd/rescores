/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */

(function ($) {
	// Dropdown action for main menu.
	$('.menu-item-has-children a').on('click', function (e) {
		//TODO: Add Aria changes.
		$(this).parent().toggleClass('menu-item-open');
		if (
			e.detail === 1 &&
			$(this).parent().hasClass('menu-item-has-children')
		) {
			// Single click - stop event.
			e.preventDefault();
		}
	});

    // Trigger dropdown on hover.
	$('.menu-item-has-children a').on('mouseenter', function (e) {
		$(this).trigger('click');
	});

    //TODO: add mouseout removal of hover.

	// Mobile Menu toggle button event.
	$('.menu-toggle').on('click', function (e) {
		$('header .navbar').toggleClass('mobile-menu-open');
	});
})(jQuery);
