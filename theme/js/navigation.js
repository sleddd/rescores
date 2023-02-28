/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {
	// All list items marked role = none.
	$('.rs-header #navbar li').attr('role', 'none');
	// Each a tag marked role = menuitem.
	$('.rs-header #navbar li a').attr('role', 'menuitem');
	// Each submenu marked role = menu.
	$('.rs-header #navbar ul').attr('role', 'menu');
	// The main menu gets a role of menubar, label, and expanded attr.
	$('.rs-header #navbar .menu').attr('role', 'menubar');
	$('.rs-header #navbar .menu').attr('aria-label', 'Primary Site Navigation');

	// On window resize check the data expanded attribute for the menubar
	// - custom-header.
	$(window).on('resize', function () {
		if ($('.rs-header #navbar').hasClass('navbar--open')) {
			$('.rs-header #navbar .menu').attr(
				'data-menubar-item-expanded',
				'true'
			);
		} else {
			// If menu toggle hidden - navbar is expanded.
			if ('none' == $('.rs-header #navbar .menu-toggle').css('display')) {
				$('.rs-header #navbar .menu').attr(
					'data-menubar-item-expanded',
					'true'
				);
			} else {
				// Navbar is closed.
				$('.rs-header #navbar .menu').attr(
					'data-menubar-item-expanded',
					'false'
				);
			}
		}
	});
	$(window).trigger('resize');

	// Add arias to submenu menuitems and attach an event listener for each dropdown
	// - custom header.
	$('.menu-item-has-children').each(function (index) {
		$(this).find('a').first().attr('aria-expanded', 'false');
		$(this).find('a').first().attr('aria-haspopup', 'true');
		$(this)
			.find('a')
			.first()
			.on('click', function (e) {
				return toggleDropdownMenu(e);
			});
	});

	// Dropdown on hover - custom header.
	$('.menu-item-has-children').hover(function (e) {
		// Removes menu hover effect for mobile.
		if ('none' == $('.rs-header #navbar .menu-toggle').css('display')) {
			$(this).find('a').first().trigger('click');
		}
	});

	// Handles dropdown functionality for menu items - custom header.
	function toggleDropdownMenu(e) {
		e.preventDefault();
		if (
			$(e.target)
				.parent()
				.find('.sub-menu')
				.first()
				.hasClass('sub-menu--open')
		) {
			// Close child menus.
			$(e.target)
				.parent()
				.find('.sub-menu')
				.first()
				.find('.sub-menu')
				.removeClass('sub-menu--open');
			$(e.target)
				.parent()
				.find('.menu-item-has-children a')
				.first()
				.attr('aria-expanded', 'false');
			$(e.target)
				.parent()
				.find('.menu-item-has-children a')
				.first()
				.removeClass('menu-item-has-children--down');
			// Close parent.
			$(e.target)
				.parent()
				.find('.sub-menu')
				.first()
				.removeClass('sub-menu--open');
			$(e.target).attr('aria-expanded', 'false');
			$(e.target).parent().removeClass('menu-item-has-children--down');
		} else {
			$(e.target)
				.parent()
				.find('.sub-menu')
				.first()
				.addClass('sub-menu--open');
			$(e.target).attr('aria-expanded', 'true');
			$(e.target).parent().addClass('menu-item-has-children--down');
		}
	}

	// Mobile Menu toggle event - custom header menu.
	$('.menu-toggle').on('click', function (e) {
		toggleNavbar(e);
	});

	// Mobile Menu toggle handler - custom header menu.
	function toggleNavbar(e) {
		// Check for menubar expanded.
		if ($('#navbar').hasClass('navbar--open')) {
			// Closing any open submenus.
			$('.sub-menu').removeClass('sub-menu--open');
			// Closing menu.
			$('#navbar').removeClass('navbar--open');
			$('#navbar .menu').attr('data-menubar-item-expanded', 'false');
		} else {
			// Opening navbar.
			$('#navbar').addClass('navbar--open');
			$('#navbar .menu').attr('data-menubar-item-expanded', 'true');
		}
	}

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
