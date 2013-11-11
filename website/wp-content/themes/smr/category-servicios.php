<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Como_Santas
 * @since Twenty Thirteen
 */

get_header(); ?>

	<main id="primary" class="by-category content-area">
		<div id="content" class="wrapper site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-servicios', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content-servicios', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</main><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
