<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage smr
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="subcontent">
          <h1>
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div><!-- .subcontent -->

	<!-- .entry-header
	<header class="entry-header">
	</header>.entry-header -->

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->



