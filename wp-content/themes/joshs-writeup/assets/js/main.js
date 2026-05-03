/**
 * Josh's Write Up — Main JavaScript
 *
 * Handles mobile menu toggle.
 */
( function() {
	'use strict';

	var toggle = document.querySelector( '.menu-toggle' );
	var nav    = document.querySelector( '.main-navigation' );

	if ( ! toggle || ! nav ) {
		return;
	}

	toggle.addEventListener( 'click', function() {
		nav.classList.toggle( 'toggled' );
		var expanded = toggle.getAttribute( 'aria-expanded' ) === 'true';
		toggle.setAttribute( 'aria-expanded', ! expanded );
	} );
} )();
