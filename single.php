<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="single-intro">
    <div class="container">
     <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <h1 class="single-header"><?php the_title(); ?> </h1>
      <p class="item-date"><?php echo get_the_date(); ?><br><?php echo get_the_author(); ?></p>
      </div>
      </div>
    </div>
  </div>
  <div class="container mid">
    <div class="row">
      <div class="col-md-1 col-md-offset-1 social">
        <?php include(TEMPLATEPATH . '/inc/addthis.php'); ?>
      </div>
      <article class="col-md-8">
<?php if ( has_post_thumbnail() ) : ?>

<?php
$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-small' );
$medium_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-medium' );
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-large' );
?>    
	      <figure>
          <img srcset="<?php echo $small_image_url[0] ?> 480w, <?php echo $medium_image_url[0]; ?> 750w" sizes="(min-width: 750px) 750px, (min-width: 360px) 360px" alt="" width="800" height="1200">
        </figure>
<?php endif; ?>
        <div class="single-content"><?php the_content(); ?></div>
      </article>
      <div class="col-md-2"></div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>