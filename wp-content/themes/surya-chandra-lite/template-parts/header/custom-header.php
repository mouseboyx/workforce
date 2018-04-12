<?php
/**
 * Custom Header
 *
 * @package Surya_Chandra
 */

?>
<div id="custom-header">
	<?php $banner = get_header_image(); ?>
	<?php if ( ! empty( $banner ) ) : ?>
		<img src="<?php echo esc_url( $banner ); ?>" alt="" />
	<?php endif; ?>

	<?php $banner_title = apply_filters( 'surya_chandra_filter_banner_title', '' ); ?>
	<?php if ( ! empty( $banner_title ) ) : ?>
		<?php
		$tag = 'h1';
		if ( is_front_page() ) {
			$tag = 'h2';
		}
		?>
		<div class="custom-header-content">
			<div class="container">
				<?php echo '<' . esc_attr( $tag ) . ' class="page-title">'; ?>
				<?php echo esc_html( $banner_title ); ?>
				<?php echo '</' . esc_attr( $tag ) . '>'; ?>
				<?php
				/**
				 * Hook - surya_chandra_action_breadcrumb.
				 *
				 * @hooked surya_chandra_add_breadcrumb - 10
				 */
				do_action( 'surya_chandra_action_breadcrumb' );
				?>
			</div><!-- .container -->
		</div><!-- .custom-header-content -->
	<?php endif; ?>

</div><!-- #custom-header -->
