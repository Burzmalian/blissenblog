  <div class="hero-wrap">
<?php 
  $image = get_field('hero_image', 'option');
  $image_small = $image['sizes']['b-small']; 
  $image_medium = $image['sizes']['b-medium'];
  $image_full = $image['url']; 
  $alt = $image['alt'];
  $title = $image['title'];
?>
<?php if ($image) : ?>
    <img src="<?php echo $image_medium; ?>" srcset="<?php echo $image_small; ?> 767w, <?php echo $image_medium; ?> 1024w, <?php echo $image_full; ?> 1280w" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
<?php else: ?>
    <div style="display:block;height:200px;"></div>
<?php endif; ?>
    <div class="hero-txt">
          <p><?php the_field('hero_eyebrow', 'option'); ?></p>
          <h1><?php the_field('hero_title', 'option'); ?></h1>
      </div>
  </div>