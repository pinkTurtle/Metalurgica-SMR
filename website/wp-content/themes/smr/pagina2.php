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


  <h1>
    Servicios
  </h1>

  <div class="contenido">

    <div class="contenido-padre">
      <?php
      if ($post->post_parent) {
          $parent = get_page($post->post_parent);
          echo apply_filters('the_content', $parent->post_content);
      }
      ?>
    </div>

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
      <h2>
        <?php the_title(); ?>
      </h2>

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
        ?>
      <?php if($paginas_hijas) { ?>
        <?php foreach($paginas_hijas as $lh) : ?>
          <?php
            $lb_class = $lh->post_name;
          ?>

          <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo 'servicios '.$lb_class; ?>">
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

  <?php get_template_part( 'menu-servicios', get_post_format() ); ?>

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

