<?php
/**
 *
 * Template Name: SMR Servicios
 * @package WordPress
 * @subpackage smr
 * @since Twenty Thirteen
 */

get_header(); ?>

	<main id="primary" class="content-area">
		<div id="content" class="wrapper site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

<hr />
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <a href=" <?php echo site_url(); ?>/servicios">
    <h1>
      Servicios
    </h1>
  </a>

  <div class="contenido">

    <div class="logo-servicio">
      <?php if (has_post_thumbnail()) : ?> 
      <a href="<?php the_permalink(); ?>">
        <div class="img-container">
        <?php echo get_the_post_thumbnail(get_the_ID(), thumbnail); ?>
        </div>
      </a>
      <?php endif; ?>
    </div>

    <div class="content-servicio">
      <a href="<?php the_permalink(); ?>">
      <h2>
        <?php the_title(); ?>
      </h2>
      </a>

      <?php the_content(); ?>
    </div>

    <div class="descripciones">
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
        $counterclass = 0;
        ?>
      <?php if($paginas_hijas) { ?>
        <?php foreach($paginas_hijas as $lh) : ?>
          <?php
            $counterclass ++;
            $lb_class = $lh->post_name;
            $serviceclass='servicios '.$lb_class;
            if($counterclass == 1) : $serviceclass.=' activo'; endif;
          ?>

          <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo $serviceclass; ?>">
            <div class="titulo-servicios">
              <strong><?php echo $lh->post_title; ?></strong>
            </div>
            <div class="contenido-servicios">
              <?php  $el_cont = $lh->post_content;
                echo apply_filters('the_content', $el_cont);
              ?>
            </div>
          </div>
        <?php endforeach; ?>

      <?php } ?>
      <!-- paginas hijas -->
    </div>
    <div class="clear"></div>

  </div>


  <div class="clear"></div>

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->


<?php endwhile; ?>
		<?php endif; ?>
		</div><!-- #content -->
	</main><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

