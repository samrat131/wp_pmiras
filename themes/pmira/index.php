<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PMIRAs
 */

get_header(); ?>
<?php /* ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php */ ?>

<div id="full-block" class="blue-bg2 ptb2">
<div class="wrap">
	<div class="wrap-contact">
	<div class="top-contact-form">
    	<input name="" type="text" value="Name" onBlur="this.value=(this.value=='') ? 'Name' : this.value;" onFocus="this.value=(this.value=='Name') ? '' : this.value;">
        <input name="" type="text" value="Email" onBlur="this.value=(this.value=='') ? 'Email' : this.value;" onFocus="this.value=(this.value=='Email') ? '' : this.value;">
        <input name="" type="tel" value="Phone" onBlur="this.value=(this.value=='') ? 'Phone' : this.value;" onFocus="this.value=(this.value=='Phone') ? '' : this.value;">
        <input name="" type="submit" value="Contact us" >
    </div>

	<div class="contact-title-block">
        <div class="contact-title">Future-proof <br>Your Retirement with Precious Metal IRAs</div>
        <div class="contact-title2">Welcome to…. ! We invite you to discover a plethora of ways through which you can better protect your assets and enjoy a financially secure future in troubled economic times.</div>
        <div class="contact-title2">No matter what line of work you’re in, there is always something you can do to protect yourself from the declining dollar. </div>
    </div>
    </div>
</div>
</div>

<div id="gold-full" class="ptb2">
<div class="wrap">
	
    <div class="gold-body">
		<h1>What is a Gold IRA?</h1>
        <div><img src="<?php bloginfo('template_directory') ?>/images/pmris-image3.jpg" alt="Image" title="Image"></div>
        <p>IRA stands for Individual Retirement Account as you may already know.</p>
        <p>If you have a retirement account, you can add gold, silver and other precious metals to it through government-approved guidelines.</p>
        <p>There are numerous benefits to be had such as income tax advantages and a highly diversified portfolio where overall risk is cut down significantly.</p>
    </div>    
    
</div>
</div>

<div id="body-full2" class="ptb2">
<div class="wrap">

	<div class="precious-metal-body">
    	<h2>Why Invest in Precious Metal IRAs?</h2>
    </div>
    <div class="main-body">
    	<div class="invest-precious-left">
        	<div class="precious-metal-content">
            	<h3 class="gold-line"><span>Gold</span></h3>
                <p>Gold is starting to become a rare commodity. Even though it’s expensive, it holds great value even as the stock market continues to head toward a crash. It can get you out of any financial crisis and does not only boast immense value but is also considered a status symbol of wealth and security. </p>
            </div>
        </div>
        <div class="invest-precious-right">
        	<div class="precious-metal-content">
            	<h3 class="silver-line"><span>Silver</span></h3>
                <p>Silver is starting to become a rare commodity. Even though it’s expensive, it holds great value even as the stock market continues to head toward a crash. It can get you out of any financial crisis and does not only boast immense value but is also considered a status symbol of wealth and security. </p>
            </div>
        </div>
    </div>

</div>
</div>

<div id="body-full" class="ptb2">
<div class="wrap">

	<div class="bottom-body">
    	<h2>Why Choose Us</h2>
        <p>Safeguard yourself from an imminent financial crisis and global economic uncertainty by relying on financial specialists that will not only educate you on the power or precious metal IRAs, but also offer the fairest prices while going the extra mile to secure you and your family’s future. </p>
    </div>
    <div class="bottom-form">
    	<input name="" type="text" value="Name" onBlur="this.value=(this.value=='') ? 'Name' : this.value;" onFocus="this.value=(this.value=='Name') ? '' : this.value;">
        <input name="" type="text" value="Email" onBlur="this.value=(this.value=='') ? 'Email' : this.value;" onFocus="this.value=(this.value=='Email') ? '' : this.value;">
        <input name="" type="tel" value="Phone" onBlur="this.value=(this.value=='') ? 'Phone' : this.value;" onFocus="this.value=(this.value=='Phone') ? '' : this.value;">
        <input name="" type="submit" value="Contuct us" >
    </div>
    
</div>
</div>
<?php
get_sidebar();
get_footer();
