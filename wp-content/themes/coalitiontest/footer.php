<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	<footer id="colophon" class="site-footer">

    <!-- Custom Footer Content from Theme Settings -->
    <div class="footer-contact">

        <?php if ( get_option('coalition_logo') ) : ?>
            <div class="footer-logo">
                <img src="<?php echo esc_url( get_option('coalition_logo') ); ?>" alt="Footer Logo">
            </div>
        <?php endif; ?>

        <?php if ( get_option('coalition_phone') ) : ?>
            <p>Phone: <?php echo esc_html( get_option('coalition_phone') ); ?></p>
        <?php endif; ?>

        <?php if ( get_option('coalition_address') ) : ?>
            <p>Address: <?php echo esc_html( get_option('coalition_address') ); ?></p>
        <?php endif; ?>

        <?php if ( get_option('coalition_fax') ) : ?>
            <p>Fax: <?php echo esc_html( get_option('coalition_fax') ); ?></p>
        <?php endif; ?>

        <?php if ( get_option('coalition_social_links') ) : ?>
            <p>Social: <?php echo esc_html( get_option('coalition_social_links') ); ?></p>
        <?php endif; ?>

    </div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ct-custom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ct-custom' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ct-custom' ), 'ct-custom', '<a href="https://coalitiontechnologies.com/">Coalition Technologies</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
