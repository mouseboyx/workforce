<?php
/**
 * Widget template
 *
 * @package Surya_Chandra
 */

?>

<div class="section section-call-to-action cta-layout-<?php echo absint( $instance['settings']['cta_layout'] ); ?>">
	<div class="call-to-action-inner-wrapper">
		<div class="container">
		<div class="before-shadow"></div>
			<div class="call-to-action-content">
				<div class="call-to-action-description">
					<?php if ( ! empty( $instance['title'] ) ) : ?>
						<h2 class="cta-title"><?php echo esc_html( $instance['title'] ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $instance['subtitle'] ) ) : ?>
						<?php echo wp_kses_post( wpautop( $instance['subtitle'] ) ); ?>
					<?php endif; ?>
				</div><!-- .call-to-action-description -->
				<div class="call-to-action-buttons">
					<?php if ( ! empty( $instance['primary_button_url'] ) && ! empty( $instance['primary_button_text'] ) ) : ?>
						<a href="<?php echo sow_esc_url( $instance['primary_button_url'] ); ?>" class="custom-button custom-primary-button"><?php echo esc_html( $instance['primary_button_text'] ); ?></a>
					<?php endif; ?>
					<?php if ( ! empty( $instance['secondary_button_url'] ) && ! empty( $instance['secondary_button_text'] ) ) : ?>
						<a href="<?php echo sow_esc_url( $instance['secondary_button_url'] ); ?>" class="custom-button custom-secondary-button"><?php echo esc_html( $instance['secondary_button_text'] ); ?></a>
					<?php endif; ?>
				</div><!-- .call-to-action-buttons -->
			</div><!-- .call-to-action-content -->
		<div class="after-shadow"></div>
		</div><!-- .container -->
	</div><!-- .call-to-action-inner-wrapper -->
</div><!-- .section-call-to-action -->
