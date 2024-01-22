<?php
/**
 * Archive Template
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

get_header(); ?>

<div id="content-archive" class="content-area">
	<main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

		<?php if ( have_posts() ) : ?>

			<?php get_template_part( 'template-parts/loop-header' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-excerpt', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php responsive_mobile_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-excerpt', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
	<?php get_sidebar(); ?>
</div><!-- #content-archive -->

<?php get_footer(); ?>
