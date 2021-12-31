<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php echo do_shortcode('[metaslider id="47373"]'); ?>
	</div>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
