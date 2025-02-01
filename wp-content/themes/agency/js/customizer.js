/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
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

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
}( jQuery ) );
var swiper = new Swiper(".team", {
	slidesPerView: 4,
	spaceBetween: 16,
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetweenSlides: 16
		},
		576: {
			slidesPerView: 2,
			spaceBetweenSlides: 16
		},
		992: {
			slidesPerView: 3,
			spaceBetweenSlides: 16
		},

		1024: {
			slidesPerView: 4,
			spaceBetweenSlides: 16
		}
	}
});

var swiper = new Swiper(".projects", {
	slidesPerView: 3,
	spaceBetween: 16,
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetweenSlides: 16
		},
		576: {
			slidesPerView: 2,
			spaceBetweenSlides: 16
		},
		1024: {
			slidesPerView: 3,
			spaceBetweenSlides: 16
		},
	}
});

