<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage smr
 * @since Twenty Thirteen 1.0
 */
?>

<hr />
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h1>
    <?php the_title(); ?>
  </h1>
  <div class="contenido">
    <?php the_content(); ?>
  </div>
  <?php if(is_page('servicios')) : ?> 
    <?php get_template_part( 'menu-servicios-root', get_post_format() ); ?>
  <?php endif; ?>
	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->
