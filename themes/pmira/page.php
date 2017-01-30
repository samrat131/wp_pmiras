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

<div id="full-block" class="blue-bg<?php echo is_front_page()?'2':''; ?> ptb2">
<div class="wrap">    
    <div class="wrap-contact">
		
		<?php echo do_shortcode( '[contact-form-7 id="13" title="Contact form 1"]' ) ?>

	    <?php if(function_exists('get_field')) { ?>
	    	<div class="contact-title-block">
				<?php echo get_field('header_content'); ?>
	    	</div>
	    <?php } ?>

    </div>
</div>
</div>

<?php  
	$divId = '';
	$divClass = '';
	if (is_front_page()) {
		$divId = 'gold-full';
		$divClass = 'gold-body';
	} else {
		$divId = 'body-full2';
		$divClass = 'education-body';
	}
?>

<div id="<?php echo $divId ?>" class="ptb2">
<div class="wrap">

	<div class="<?php echo $divClass ?>">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
	</div>
   
</div>
</div>

<?php if(function_exists('get_field')) { ?>
	<?php if(get_field('body_content')!='') { ?>
	<div id="body-full<?php echo is_front_page()?'2':''; ?>" class="ptb2">
	<div class="wrap">    
		<?php echo get_field('body_content'); ?>
	</div>
	</div>
	<?php } ?>
<?php } ?>

<?php if(function_exists('get_field')) { ?>
	<?php if(get_field('body_content_2')!='') { ?>
	<?php  
		$divId = '';
		$divClass = '';
		if (is_page('education')) {
			$divId = 'body-full2';
			$divClass = '';
		} else {
			$divId = 'precious-full';
			$divClass = 'precious-account';
		}
	?>	
	<div id="<?php echo $divId ?>" class="ptb2">
	<div class="wrap">	
    	<div class="<?php echo $divClass ?>">
			<?php echo get_field('body_content_2'); ?>
    	</div>
	</div>
	</div>    	
	<?php } ?>
<?php } ?>

<?php if(function_exists('get_field')) { ?>
	<?php if(get_field('footer_content')!='') { ?>
	<div id="body-full" class="ptb2">
	<div class="wrap">
    	<div class="bottom-body">
			<?php echo get_field('footer_content'); ?>
    	</div>
	    <?php echo do_shortcode( '[contact-form-7 id="25" title="Contact form Footer"]' ) ?>
	</div>
	</div>
	<?php } ?>
<?php } ?>

<?php
get_footer();
