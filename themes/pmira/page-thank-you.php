<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PMIRAs
 */

get_header(); ?>

<div id="full-block" class="blue-bg2 ptb2">
<div class="wrap">
	<div class="wrap-contact">
	<div class="thankyou-content">
        <h2>Thank you</h2>
        <p>Thank you for visiting <a href="<?php echo esc_url( home_url( '/' ) ); ?>">PMRIAs</a> website.<br>You will receive an email message shortly.</p>
        <h3>Check your Email!</h3>
        <p> If it's not in your inbox, don't forget to check your junk email folder.</p>
        <div><img src="<?php bloginfo('template_directory') ?>/images/pmris-tick2.png" alt="Tick" title="Tick"></div>
    </div>
    </div>
</div>
</div>

<?php
get_footer();
