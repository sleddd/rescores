/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {

	$( '.menu-item-has-children').each( function( index ) {
		$( this ).find('a').first().attr('role', 'button');
		$( this ).find('a').first().attr('aria-haspopup', 'listbox');
		$( this ).find('a').first().attr('aria-expanded', 'false');
		$( this ).find('a').first().attr('aria-labelledby', `menu-listbox-${index.toString()}` );
		$( this ).find('a').first().attr('aria-label', `Menu Listbox Dropdown ${index.toString()}` );
		$( this ).find('a').first().attr('id', `menu-listbox-${index.toString()}` );
		$( this ).find('a').first().on('click', function( e ) { return toggleDropdownMenu( e ) });
	});

	// Dropdown trigger events.

	// Dropdown on hover.
	$( '.menu-item-has-children').on( 'mouseenter', function( e ) {
		var self = this;
		setTimeout( function() {
			if ( ! $('header .navbar').hasClass('navbar--open') ) {
				$( self ).find('a').first().trigger('click');
			}
		}, 100 );
	});

	// Dropdown on hover end.
	$( '.menu-item-has-children').on( 'mouseleave', function( e ) {
		var self = this; 
		if ( ! $('header .navbar').hasClass('navbar--open') ) {
			$( self ).find('a').first().trigger('click');
		}
	});

	// Handles dropdown functionality for menu items.
    function toggleDropdownMenu( e ) {

		e.preventDefault();

		if ( $( e.target ).parent().find('.sub-menu').first().hasClass('sub-menu--open') ) {
			// Close child menus.
			$( e.target ).parent().find('.sub-menu').first().find('.sub-menu').removeClass('sub-menu--open');
			$( e.target ).parent().find('.sub-menu').first().find('.sub-menu').attr('aria-expanded', 'false');
			// Close parent.
			$( e.target ).parent().find('.sub-menu').first().removeClass('sub-menu--open');
			$( e.target ).attr('aria-expanded', 'false');

			// Remove semibold for mobile menu.
			if ( $('header .navbar').hasClass('navbar--open') ) {
				$( e.target ).removeClass('semibold');
			}
		} else {
			$( e.target ).parent().find('.sub-menu').first().addClass('sub-menu--open');
			$( e.target ).attr('aria-expanded', 'true');

			// Add semibold for mobile menu.
			if ( $('header .navbar').hasClass('navbar--open') ) {
				$('header .navbar').find('a').removeClass('semibold');
				$( e.target ).addClass('semibold');
			}
		}
	}

	// Mobile Menu toggle event.
	$('.menu-toggle').on('click', function (e) { toggleNavbar(e); });

	function toggleNavbar( e ) {
		if ( $('header .navbar').hasClass('navbar--open') ) {
			$('header .navbar').removeClass('navbar--open');
			$( this ).attr('aria-expanded', 'false');
			$('header .navbar').find('a').removeClass('semibold');
			$('.sub-menu').removeClass('sub-menu--open');
		} else {
			$('header .navbar').addClass('navbar--open');
			$( this ).attr('aria-expanded', 'true');
		}
	}

})( jQuery );