      <div class="servicios-restantes menu">

        <!--paginas hijas-->
          <?php /* Pages level [1] */?>
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
              $classes = array($lh->post_name);
            ?>

            <?php $str_class = ''; ?>
            <?php foreach (get_post_class($classes, $lh->ID) as $cl) : ?>
              <?php $str_class .= $cl . ' '; ?>
            <?php endforeach; ?>

            <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo 'servicios '.$lb_slug.' '.$lb_class; ?>">
              <div class="logo-servicio">
                <?php if (has_post_thumbnail($lh->ID)) : ?> 
                <a href="<?php echo $lb_link; ?>">
                  <?php echo get_the_post_thumbnail($lh->ID, thumbnail); ?>
                </a>
                <?php endif; ?>
              </div>
              <div class="titulo-servicio">
                <a href="<?php echo $lb_link; ?>">
                      <?php echo $lh->post_title; ?>
                </a>
              </div>

            </div>
          <?php endforeach; ?>

          <div class="clear"></div>
        <?php } ?>
        <!-- paginas hijas -->

      </div><!-- #menu-servicios -->


