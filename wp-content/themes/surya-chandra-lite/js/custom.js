( function( $ ) {

	'use strict';

	$(document).ready(function($){

		// Trigger mobile menu.
		$('#mobile-trigger').sidr({
			timing: 'ease-in-out',
			speed: 500,
			source: '#mob-menu',
			renaming: false,
			name: 'sidr-main'
		});

		$('#sidr-main').find( '.sub-menu' ).before( '<span class="dropdown-toggle"><strong class="dropdown-icon"></strong>' );

		$('#sidr-main').find( '.dropdown-toggle').on('click',function(e){
			e.preventDefault();
			$(this).next('.sub-menu').slideToggle();
			$(this).toggleClass( 'toggle-on' );
		});

		// Search icon.
		if( $('.search-icon').length > 0 ) {
			$('.search-icon').on('click', function(e){
				e.preventDefault();
				$('.search-box-wrap').slideToggle();
			});
			$('.btn-close-search').on('click', function(e){
				e.preventDefault();
				$('.search-box-wrap').slideToggle();
			});
		}

		// Implement go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		$( window ).scroll(function(){
			if ( $( this ).scrollTop() > 100 ) {
				$scroll_obj.fadeIn();
			} else {
				$scroll_obj.fadeOut();
			}
		});

		$scroll_obj.click(function(){
			$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
			return false;
		});

		// Masonry.
		if ( $( 'body').hasClass( 'archive-layout-grid' ) && $( '#masonry-loop' ).length > 0 ) {
			var $blocks = $('#main');

			$blocks.imagesLoaded(function(){
				$blocks.masonry({
					'columnWidth': '.hentry',
					'itemSelector': '.hentry',
					'percentPosition': true
				});

				// Fade blocks in after images are ready (prevents jumping and re-rendering).
				$('.hentry').fadeIn();
			});

			$(window).on('resize', function() {
				$blocks.masonry();
			});


		}
	});

} )( jQuery );
