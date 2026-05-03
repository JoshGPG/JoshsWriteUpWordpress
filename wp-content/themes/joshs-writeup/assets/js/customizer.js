/**
 * Theme Customizer live preview.
 */
( function( $ ) {
	'use strict';

	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	wp.customize( 'joshs_writeup_footer_text', function( value ) {
		value.bind( function( to ) {
			$( '.site-info' ).html( to );
		} );
	} );
} )( jQuery );
