/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {

	// All list items marked role = none.
	$('#navbar li').attr('role', 'none');
	// Each a tag marked role = menuitem.
	$('#navbar li a').attr('role','menuitem');
	// Each submenu marked role = menu.
	$('#navbar ul').attr('role','menu');
	// The main menu gets a role of menubar, label, and expanded attr.
	$('#navbar .menu').attr('role','menubar');
	$('#navbar .menu').attr('aria-label','Primary Site Navigation');
	
	// On window resize check the data expanded attribute for the menubar.
	$(window).on('resize', function(){ 
		if ( $('#navbar').hasClass('navbar--open') ) {
			$('#navbar .menu').attr('data-menubar-item-expanded', 'true');
		} else {
			// If menu toggle hidden - navbar is expanded.
			if ( 'none' == $('#navbar .menu-toggle').css('display') ) {
				$('#navbar .menu').attr('data-menubar-item-expanded', 'true');
			} else {
				// Navbar is closed.
				$('#navbar .menu').attr('data-menubar-item-expanded', 'false');
			}
		}
	});
	$(window).trigger('resize');
	
	// Add arias to submenu menuitems and attach an event listener for each dropdown.
	$( '.menu-item-has-children').each( function( index ) {
		$( this ).find('a').first().attr('aria-expanded', 'false');
		$( this ).find('a').first().attr('aria-haspopup', 'true');
		$( this ).find('a').first().on('click', function( e ) { return toggleDropdownMenu( e ) });
	});

	// Dropdown on hover.
	$( '.menu-item-has-children').hover( function( e ) {
		// Removes menu hover effect for mobile.
		if ( 'none' == $('#navbar .menu-toggle').css('display') ) {
			$( this ).find('a').first().trigger('click');
		}
	});

	// Handles dropdown functionality for menu items.
    function toggleDropdownMenu( e ) {

		e.preventDefault();

		if ( $( e.target ).parent().find('.sub-menu').first().hasClass('sub-menu--open') ) {
			// Close child menus.
			$( e.target ).parent().find('.sub-menu').first().find('.sub-menu').removeClass('sub-menu--open');
			$( e.target ).parent().find('.menu-item-has-children a').first().attr('aria-expanded', 'false');
			$( e.target ).parent().find('.menu-item-has-children a').first().removeClass('menu-item-has-children--down');
			// Close parent.
			$( e.target ).parent().find('.sub-menu').first().removeClass('sub-menu--open');
			$( e.target ).attr('aria-expanded', 'false');
			$( e.target ).parent().removeClass('menu-item-has-children--down');
		} else {
			$( e.target ).parent().find('.sub-menu').first().addClass('sub-menu--open');
		    $( e.target ).attr('aria-expanded', 'true');
			$( e.target ).parent().addClass('menu-item-has-children--down');
		}
	}

	// Mobile Menu toggle event.
	$('.menu-toggle').on('click', function (e) { toggleNavbar(e); });
	
	function toggleNavbar( e ) {

		// Check for menubar expanded.
		if ( $('#navbar').hasClass('navbar--open') ) {
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

	// Default mobile helping
	$('.open-on-hover-click').hover( function(e) {
	    $( this ).find('button').first().attr('aria-expanded', function (i, attr) {
			return attr == 'true' ? 'false' : 'true'
		});
	});
})( jQuery );