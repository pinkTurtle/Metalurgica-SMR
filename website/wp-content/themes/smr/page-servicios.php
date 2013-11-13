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
 * @subpackage smr
 * @since Twenty Thirteen
 */

get_header(); ?>

  <main id="primary" class="content-area">
    <div id="content" class="wrapper site-content" role="main">
    <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

      <div id="menu-servicios" class="menu">

        <!--paginas hijas-->
          <?php /* Pages level [1] */?>
          <?php $argumentos = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'child_of' => $post->ID,
            'parent' => $post->ID,
            'post_type' => 'page',
            'post_status' => 'publish'
          ); 

          $paginas_hijas = get_pages($argumentos); 
          ?>

        <?php if($paginas_hijas) { ?>
          <?php foreach($paginas_hijas as $lh) : ?>
            <?php
              $lb_class = $lh->post_name;
              $lb_link = get_permalink( $lh->ID );
            ?>

            <div id="menu-item-<?php echo $lh->ID; ?>" class="<?php echo 'servicios menu-item '.$lb_class; ?>">
                <?php if (has_post_thumbnail($lh->ID)) : ?> 
                <a href="<?php echo $lb_link; ?>">
                  <?php echo get_the_post_thumbnail($lh->ID, thumbnail); ?>
                </a>
                <?php endif; ?>
              <p><?php echo $lh->post_title; ?></p>
            </div>
          <?php endforeach; ?>

          <div class="clear"></div>
        <?php } ?>
        <!-- paginas hijas -->

      </div><!-- #menu-servicios -->

          <div class="clear"></div>
    </div><!-- #content -->
  </main><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
