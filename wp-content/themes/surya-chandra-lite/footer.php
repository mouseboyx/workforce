<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Surya_Chandra
 */

?>
				</div><!-- .inner-wrapper -->

			</div><!-- .container -->

		</div><!-- #content -->

		<?php
		/**
		 * Hook - surya_chandra_action_footer.
		 *
		 * @hooked surya_chandra_add_footer_widgets - 10
		 * @hooked surya_chandra_add_footer_copyright - 20
		 */
		do_action( 'surya_chandra_action_footer' );
		?>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	</body>
</html>
