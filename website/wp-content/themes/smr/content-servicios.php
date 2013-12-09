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

    <?php if(is_page('servicios')) : ?> 
    <div class="logo-servicio">
      <?php if (has_post_thumbnail()) : ?> 
        <a href="<?php the_permalink(); ?>">
          <div class="img-container">
          <?php echo get_the_post_thumbnail(get_the_ID(), thumbnail); ?>
          </div>
        </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php the_content(); ?>
  </div>

  <?php if(is_page('servicios')) : ?> 

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

    <?php get_template_part( 'menu-servicios-root', get_post_format() ); ?>
  </div>

  <?php endif; ?>

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->
