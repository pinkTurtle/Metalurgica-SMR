<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="my-slider content-gallery" id="<?php echo $gallery->anchor ?>">
  <div>
    <?php $i = 0; ?>
    <?php foreach ( $images as $image ) : ?>
    <div id="ngg-image-<?php echo $image->pid ?>" class="smr-anchor-box" >
        <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
          <?php if ( !$image->hidden ) { ?>
          <img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" />
          <?php } ?>
        </a>
    </div>

      <?php $i++; ?>

    <?php endforeach; ?>
    
  </div>
</div>

<?php endif; ?>
