/**
 * The JavaScript code for handling the menu dropdown effects
 * and mobile menu toggling.
 *
 */
(function ($) {

	// Dropdown trigger events.
	$( '.menu-item-has-children a').on('click', function( e ) { return openDropdownMenu( e ) });
	$( '.menu-item-has-children').hover( function(e) { $( this ).find('a').trigger('click'); });

	// Handles dropdown functionality for menu items.
    function openDropdownMenu(e) {
		//TODO: Add aria changes.
		$( e.target ).parent().find('.sub-menu').first().toggleClass('sub-menu--open');
		if (
			e.detail === 1 &&
			$( e.target ).parent().hasClass('menu-item-has-children')
		) {
			// Single click - stop event.
			e.preventDefault();
		}
	}

	// Mobile Menu toggle event.
	$('.menu-toggle').on('click', function (e) {
		$('header .navbar').toggleClass('navbar--open');
	});

})( jQuery );