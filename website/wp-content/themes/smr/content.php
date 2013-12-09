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

  <a href="<?php the_permalink(); ?>">
    <h1>
      <?php the_title(); ?>
    </h1>
  </a>
  <div class="contenido">
    <?php the_content(); ?>
  </div>

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->
