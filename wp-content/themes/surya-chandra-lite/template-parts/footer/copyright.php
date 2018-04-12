<?php
/**
 * Footer copyright
 *
 * @package Surya_Chandra
 */

?>

<footer id="colophon" class="site-footer">
	<?php
	$social_links = surya_chandra_get_social_links();
	?>
	<?php if ( has_nav_menu( 'menu-footer' ) || ! empty( $social_links ) ) : ?>
		<div class="colophon-top">
			<div class="container">
				<?php surya_chandra_render_social_links(); ?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-footer',
						'container_id'   => 'footer-navigation',
						'depth'          => 1,
						'fallback_cb'    => false,
					) );
				?>
			</div><!-- .container -->
		</div><!-- .colophon-top -->
	<?php endif; ?>

	<?php
	$copyright_text  = surya_chandra_get_option( 'copyright_text' );
	$powered_by_text = sprintf( esc_html__( 'Surya Chandra Lite by %s', 'surya-chandra-lite' ), '<a target="_blank" rel="designer" href="https://wenthemes.com/">' . esc_html__( 'WEN Themes', 'surya-chandra-lite' ) . '</a>' );
	?>
	<?php if ( ! empty( $copyright_text ) || ! empty( $powered_by_text ) ) : ?>
		<div class="colophon-bottom">
			<div class="container">
				<?php if ( ! empty( $copyright_text ) ) : ?>
					<div class="copyright">
						<?php echo wp_kses_post( wpautop( $copyright_text ) ); ?>
					</div><!-- .copyright -->
				<?php endif; ?>

				<?php if ( ! empty( $powered_by_text ) ) : ?>
					<div class="site-info">
						<?php echo wp_kses_post( wpautop( $powered_by_text ) ); ?>
					</div><!-- .site-info -->
				<?php endif; ?>
			</div><!-- .container -->
		</div><!-- .colophon-bottom -->
	<?php endif; ?>
</footer><!-- #colophon -->
