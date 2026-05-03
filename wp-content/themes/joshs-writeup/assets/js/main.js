/**
 * Josh's Write Up — Main JavaScript
 *
 * Handles mobile menu toggle, search toggle, and keyboard interactions.
 */
( function() {
	'use strict';

	// --- Mobile Menu ---
	var toggle = document.querySelector( '.menu-toggle' );
	var nav    = document.querySelector( '.main-navigation' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function() {
			nav.classList.toggle( 'toggled' );
			var expanded = toggle.getAttribute( 'aria-expanded' ) === 'true';
			toggle.setAttribute( 'aria-expanded', String( ! expanded ) );
		} );

		// Close menu when clicking outside.
		document.addEventListener( 'click', function( e ) {
			if ( nav.classList.contains( 'toggled' ) && ! nav.contains( e.target ) ) {
				nav.classList.remove( 'toggled' );
				toggle.setAttribute( 'aria-expanded', 'false' );
			}
		} );

		// Close menu on Escape key.
		document.addEventListener( 'keydown', function( e ) {
			if ( e.key === 'Escape' && nav.classList.contains( 'toggled' ) ) {
				nav.classList.remove( 'toggled' );
				toggle.setAttribute( 'aria-expanded', 'false' );
				toggle.focus();
			}
		} );
	}

	// --- Header Search Toggle ---
	var searchToggle = document.querySelector( '.header-search-toggle' );
	var searchForm   = document.querySelector( '.header-search-form' );

	if ( searchToggle && searchForm ) {
		searchToggle.addEventListener( 'click', function( e ) {
			e.stopPropagation();
			var isOpen = searchForm.classList.toggle( 'is-open' );
			searchToggle.setAttribute( 'aria-expanded', String( isOpen ) );

			if ( isOpen ) {
				var input = searchForm.querySelector( '.search-field' );
				if ( input ) {
					input.focus();
				}
			}
		} );

		// Close search on outside click.
		document.addEventListener( 'click', function( e ) {
			if ( searchForm.classList.contains( 'is-open' ) && ! searchForm.contains( e.target ) && ! searchToggle.contains( e.target ) ) {
				searchForm.classList.remove( 'is-open' );
				searchToggle.setAttribute( 'aria-expanded', 'false' );
			}
		} );

		// Close search on Escape key.
		document.addEventListener( 'keydown', function( e ) {
			if ( e.key === 'Escape' && searchForm.classList.contains( 'is-open' ) ) {
				searchForm.classList.remove( 'is-open' );
				searchToggle.setAttribute( 'aria-expanded', 'false' );
				searchToggle.focus();
			}
		} );
	}
} )();
