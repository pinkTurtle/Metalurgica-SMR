<?php
register_nav_menu( 'primario', 'Menu primario' );

/**
 * Proper way to enqueue scripts and styles
 */
/*
function theme_name_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/galleria-1.2.9.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


function santas_gallery($attr) {
  $post = get_post();

  static $instance = 0;
  $instance++;

  if ( ! empty( $attr['ids'] ) ) {
    // 'ids' is explicitly ordered, unless you specify otherwise.
    if ( empty( $attr['orderby'] ) )
      $attr['orderby'] = 'post__in';
    $attr['include'] = $attr['ids'];
  }

  if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
      unset( $attr['orderby'] );
  }

  extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'dl',
    'icontag'    => 'dt',
    'captiontag' => 'dd',
    'columns'    => 3,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
  ), $attr));

  $id = intval($id);
  if ( 'RAND' == $order )
    $orderby = 'none';

  if ( !empty($include) ) {
    $_images = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

    $images = array();
    foreach ( $_images as $key => $val ) {
      $images[$val->ID] = $_images[$key];
    }
  } elseif ( !empty($exclude) ) {
    $images = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  } else {
    $images = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  }

  if ( empty($images) )
    return '';

  if ( is_feed() ) {
    $output = "\n";
    foreach ( $images as $att_id => $image )
      $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
    return $output;
  }

  $selector = "gallery-{$instance}";
  $output = "<div class='santasgallery' id='galleria'>";

  //$output .= '<ul>';

  $i = 0;
  foreach ( $images as $id => $image ) {

    //extraer título de la imagen
    $tit = $image->post_title;

    //extraer contenido de la imagen
    $desc = $image->post_content;

    $imgatt = wp_get_attachment_image_src( $id, "thumbnail" );
    $imgfullatt = wp_get_attachment_image_src( $id, "full" );
    $src = $imgfullatt[0];

    $output .= '<img class="wp-image-345" src="'.$src.'" title="'.$tit.'" alt="'.$desc.'" />';
//    $output .= '<div class="mg-content"><hr /><h3>'.$tit.'</h3>'.$desc.'</div>';
  }
  //$output .= '</ul>
  $output .= '</div>';
  $output .= '<script>';
  $output .= "Galleria.loadTheme('". get_bloginfo('url')."/wp-content/themes/comosantas/js/galleria.twelve.min.js');";

  $output .= 'Galleria.run("#galleria", {autoplay: 7000, transition:"slide"})';
  $output .= '</script>';

  return $output;
} 

remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'santas_gallery');



// removing admin menus en cms

if (!current_user_can( 'manage_options' )) {

function my_remove_menu_pages() {
  remove_menu_page('themes.php');
  //remove_menu_page('edit.php?post_type=acf');
  remove_menu_page('index.php');
  remove_menu_page('tools.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('plugins.php');
  //remove_menu_page('edit.php?post_type=page');
  remove_menu_page('edit.php');
  remove_menu_page('users.php');
  remove_menu_page('options-general.php');
  //remove_menu_page('upload.php');
  //remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
  //remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
  }
add_action( 'admin_menu', 'my_remove_menu_pages' );
// end removing
}

add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
*/
show_admin_bar(false);
?>
