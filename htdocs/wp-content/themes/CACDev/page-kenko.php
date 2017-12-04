<?php
/**
 * Template Name: Single Page 健康ch(page-kenko.php)
 *
 * @package CACValiEnv
 * @subpackage CACValiEnv
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<?php get_header('kenko'); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
