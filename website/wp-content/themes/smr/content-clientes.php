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
      $classes = array($lh->post_name);
      $ubicacion = simple_fields_get_post_value($lh->ID,array(1,1),true);
    ?>

    <?php $str_class = ''; ?>
    <?php foreach (get_post_class($classes, $lh->ID) as $cl) : ?>
      <?php $str_class .= $cl . ' '; ?>
    <?php endforeach; ?>

    <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo 'clientes '.$lb_slug.' '.$lb_class; ?>">
      <div class="logo-cliente">
        <?php if (has_post_thumbnail($lh->ID)) : ?> 
        <a href="<?php echo $lb_link; ?>">
          <?php echo get_the_post_thumbnail($lh->ID, thumbnail); ?>
        </a>
        <?php endif; ?>
      </div>
      <div class="titulo-clientes">
        <a href="<?php echo $lb_link; ?>">
              <?php echo $lh->post_title; ?>
        </a>
      </div>
      <strong><?php echo $ubicacion; ?></strong>
      <p>
        <?php echo substr($lh->post_content,0 , 50); ?>
      </p>

    </div>
  <?php endforeach; ?>

  <div class="clear"></div>
<?php } ?>
<!-- paginas hijas -->

  </div>

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->
