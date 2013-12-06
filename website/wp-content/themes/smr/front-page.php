<?php
get_header(); ?>

<div class="my-slider">
  <ul id="slides">
    <?php
    $initslides = new WP_Query(array(
      'post_type' => 'imgslides',
      'orderby' => 'rand',
      'showposts' => 5,
      'post_status'=>'publish'
    ));
    // The Loop
    if (have_posts()) :
    ?>  

      <li>
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/ending.jpg" />
      </li>

      <?php
      while ($initslides->have_posts()) :
      $initslides->the_post();
      $post_thumb_id = get_post_thumbnail_id($post->ID);
      $img = wp_get_attachment_image_src($post_thumb_id, 'single-post-thumbnail');
      $url = $img[0];?>

      <li>
        <div class="desc">
          <p><?php the_title(); ?></p>
          <?php //the_content(); ?>
        </div>
        <img src="<?php echo $url; ?>" alt="SMR"/>
      </li>

      <?php
      endwhile;
      ?>

      <li>
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/ending.jpg" />
      </li>

    <?php
    endif;
    // end loop
    wp_reset_postdata();
    ?><!--fin init slides aleatorios -->
  </ul><!-- fin slides -->
</div><!-- fin my-slider -->

<main id="primary" class="home-content-area">
  <div id="content" class="wrapper front-content" role="main">

  <?php if ( have_posts() ) : ?>

    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>

  </div><!-- #content -->
</main><!-- #primary -->
<?php get_footer(); ?>
