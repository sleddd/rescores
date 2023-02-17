/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {

	// Dropdown trigger events.
	$( '.menu-item-has-children a').on('click', function( e ) { return toggleDropdownMenu( e ) });

	// Dropdown on hover.
	$( '.menu-item-has-children').on( 'mouseenter', function( e ) {
		var self = this;
		setTimeout( function() {
			if ( ! $('.navbar').hasClass('navbar--open') ) {
				$( self ).find('a').first().trigger('click');
			}
		}, 100 );
	});

	// Dropdown on hover end.
	$( '.menu-item-has-children').on( 'mouseleave', function( e ) {
		var self = this; 
		setTimeout( function() {
			if ( ! $('.navbar').hasClass('navbar--open') ) {
				$( self ).find('a').first().trigger('click');
			}
		}, 100 );
	});
		
		

	// Handles dropdown functionality for menu items.
    function toggleDropdownMenu(e) {
		//TODO: Add aria changes.
		if ( $( e.target ).parent().find('.sub-menu').first().hasClass('sub-menu--open') ) {
			// Close child menus.
			$( e.target ).parent().find('.sub-menu').first().find('.sub-menu').removeClass('sub-menu--open');
			// Close parent.
			$( e.target ).parent().find('.sub-menu').first().removeClass('sub-menu--open');
			// Remove semibold for mobile menu.
			if ( $('header .navbar').hasClass('navbar--open') ) {
				$( e.target ).removeClass('semibold');
			}
		} else {
			$( e.target ).parent().find('.sub-menu').first().addClass('sub-menu--open');
			// Add semibold for mobile menu.
			if ( $('header .navbar').hasClass('navbar--open') ) {
				$( e.target ).addClass('semibold');
			}
		}

		// Ensures that the top anchor shows drodown first, then if double clicked,
		// it continues on to the link url.
		if ( e.detail === 1 && $( e.target ).parent().hasClass('menu-item-has-children') ) {
			// Single click - stop event.
			e.preventDefault();
		}
	}

	// Mobile Menu toggle event.
	$('.menu-toggle').on('click', function (e) {
		$('header .navbar').toggleClass('navbar--open');
	});

})( jQuery );