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
<?php
$sv_path = 'servicios/mantenimiento-electromecanico-industrial';
$servicios = get_page_by_path($sv_path);
?>

  <div class="contenido servicios">
  <?php the_content(); ?>

    <div class="logo-servicio">
      <?php if (has_post_thumbnail($servicios->ID)) : ?> 
      <a href="<?php the_permalink($servicios->ID); ?>">
        <div class="img-container">
        <?php echo get_the_post_thumbnail($servicios->ID, thumbnail); ?>
        </div>
      </a>
      <?php endif; ?>
    </div>

    <div class="content-servicio root">
      <h2>
        <?php echo $servicios->post_title; ?>
      </h2>
    </div>

    <div class="descripciones">
      <?php $argumentos = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'child_of' => $servicios->ID,
        'parent' => $servicios->ID,
        'post_type' => 'page',
        'post_status' => 'publish'
      ); 

      $paginas_hijas = get_pages($argumentos); 
      ?>
      <?php if($paginas_hijas) { ?>
      <?php foreach($paginas_hijas as $lh) : ?>
      <?php $lb_class = $lh->post_name; ?>

      <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo 'servicios '.$lb_class; ?>">
        <div class="titulo-servicios">
          <strong><?php echo $lh->post_title; ?></strong>
        </div>
      </div>
      <?php endforeach; ?>

        <?php } ?>
        <!-- paginas hijas -->
    </div>
    <div class="clear"></div>
  </div>

  <?php get_template_part( 'menu-servicios-root', get_post_format() ); ?>

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

