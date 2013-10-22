<?php
get_header(); ?>

  <div id="home-primary" class="home-content-area">
    <div id="home-content" class="front-content" role="main">

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
            while ($initslides->have_posts()) :
            $initslides->the_post();
            $post_thumb_id = get_post_thumbnail_id($post->ID);
            $img = wp_get_attachment_image_src($post_thumb_id, 'single-post-thumbnail');
            $url = $img[0];?>

            <li>
            <div class="desc">
            <p><?php the_title(); ?></p></div>
              <img src="<?php echo $url; ?>" alt="SMR"/>
            </li>

            <?php
            endwhile;
          endif;
          // end loop
          wp_reset_postdata();
          ?><!--fin init slides aleatorios -->
        </ul><!-- fin slides -->
      </div><!-- fin container -->

    </div><!-- #content -->
  </div><!-- #primary -->
