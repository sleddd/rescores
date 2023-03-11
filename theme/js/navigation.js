/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {
	// Adds aria expanding true/false for hover on desktop - default block menu.
	$('.open-on-hover-click').hover(function (e) {
		if (
			'none' ==
			$('.wp-block-navigation__responsive-container-close').css('display')
		) {
			$(this)
				.find('button')
				.first()
				.attr('aria-expanded', function (i, attr) {
					return attr == 'true' ? 'false' : 'true';
				});
		}
	});

	// Event listener for mobile sub-menu toggle - default block menu.
	$('.open-on-hover-click button').on('click', function (e) {
		if (
			'none' !=
			$('.wp-block-navigation__responsive-container-close').css('display')
		) {
			defaultMobileMenuDropdown(e);
		}
	});

	// Controls click functionality on mobile to open/close menus - default block menu.
	function defaultMobileMenuDropdown(e) {
		if (
			'none' !=
			$('.wp-block-navigation__responsive-container-close').css('display')
		) {
			$(e.target)
				.find('button')
				.first()
				.attr('aria-expanded', function (i, attr) {
					return attr == 'true' ? 'false' : 'true';
				});
		}
	}

	// Closes mobile menu on window resize - default block menu.
	$(window).on('resize', function () {
		if (
			'none' !=
			$('.wp-block-navigation__responsive-container-close').css('display')
		) {
			$('.wp-block-navigation__responsive-container-close').trigger(
				'click'
			);
			$('.wp-block-navigation-submenu__toggle').attr(
				'aria-expanded',
				'false'
			);
		}
	});
})(jQuery);
