<?php 
/**
Template Page for the album overview

Follow variables are useable :

  $album       : Contain information about the album
  $galleries   : Contain all galleries inside this album
  $pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

<div class="the-content-slider">   
  <div class="content-slider album-lightbox ngg-albumoverview">   
    <div>

      <!-- List of galleries -->
      <?php foreach ($galleries as $gallery) : ?>
      
      <div class="smr-album">
          <div class="ngg-album-link"  id="<?php echo $gallery->name ?>">
            <?php $images =  nggGetGallery( $gallery->gid ); 
            $imgcntr = 0;
            ?>

            <?php foreach ( $images as $image ) : ?>
              <?php if ( $imgcntr == 0 ): ?>
                <a href="<?php echo $image->imageURL; ?>" <?php echo $image->thumbcode; ?> >
                  <img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>" />
                  <span><?php echo $gallery->title ?></span>
                </a>
                <?php $imgcntr++; ?>
              <?php else: ?>
                <a href="<?php echo $image->imageURL ?>" title="<?php echo str_replace("\"", "'", $image->description); ?>" <?php echo $image->thumbcode ?> ></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
      </div>

      <?php endforeach; ?>
      
      <!-- Pagination -->
      <?php echo $pagination ?>

    </div>
  </div>

  <div class="slider-navigator">
    <div class="sl-left">&laquo;</div>
    <div class="sl-stop">[]</div>
    <div class="sl-play">&gt;</div>
    <div class="sl-right">&raquo;</div>
  </div>
</div>
<?php endif; ?>

