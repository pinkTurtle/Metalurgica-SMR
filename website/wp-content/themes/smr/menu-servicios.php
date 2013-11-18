      <div class="servicios-restantes menu">
          <?php $argumentos = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'child_of' => $post->post_parent,
            'parent' => $post->post_parent,
            'post_type' => 'page',
            'exclude' => get_the_ID(),
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
                <div class="img-container">
                  <?php echo get_the_post_thumbnail($lh->ID, thumbnail); ?>
                </div>
              </a>
              <?php endif; ?>
            <p><?php echo $lh->post_title; ?></p>
            </div>
          <?php endforeach; ?>

          <div class="clear"></div>
        <?php } ?>
      </div>

      <div id="menu-servicios" class="menu">
          <?php $argumentos = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'child_of' => $post->post_parent,
            'parent' => $post->post_parent,
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
              <div class="logo-servicio">  
                <a href="<?php echo $lb_link; ?>">
                <div class="img-container">
                  <?php echo get_the_post_thumbnail($lh->ID, thumbnail); ?>
                </div>
                </a>
                <?php endif; ?>
              </div>
              <p><strong><?php echo $lh->post_title; ?></strong></p>
            </div>
          <?php endforeach; ?>

          <div class="clear"></div>
        <?php } ?>
      </div>
