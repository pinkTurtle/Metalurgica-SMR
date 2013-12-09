
<?php
/**
 *
 * Template Name: SMR Clientes
 * @package WordPress
 * @subpackage smr
 * @since Twenty Thirteen
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="wrapper site-content" role="main">
    <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <hr />
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <a href=" <?php echo site_url(); ?>/clientes">
            <h1>
              Clientes
            </h1>
          </a>
          <div class="contenido">
            <div class="clientes-individual">
              <div class="titulo-serv">
                <?php the_title(); ?>
              </div>
                <strong>
                  <?php $ubicacion = simple_fields_value('ubicacion'); ?>
                  <?php echo $ubicacion; ?>
                </strong>

              <div class="cliente-contenido">
                <br />
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="clear"></div>
          <footer class="entry-meta">
          </footer><!-- .entry-meta -->
        </article><!-- #post -->
      <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
