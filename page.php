<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="single-intro">
    <div class="container">
     <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
      <h1 class="single-header"><?php the_title(); ?> </h1>
      <p class="item-date"><?php echo get_the_date(); ?><br><?php echo get_the_author(); ?></p>
      </div>
      </div>
    </div>
  </div>
  <div class="container mid">
    <div class="row">
      <div class="col-sm-1">
        <?php include(TEMPLATEPATH . '/inc/addthis.php'); ?>
      </div>
      <article class="col-sm-10">
<?php if ( has_post_thumbnail() ) : ?>

<?php
$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-small' );
$medium_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-medium' );
?>    
	      <figure>
          <img class="single-featured" srcset="<?php echo $small_image_url[0] ?> 480w, <?php echo $medium_image_url[0]; ?> 750w" sizes="(min-width: 750px) 750px, (min-width: 360px) 360px" alt="" width="800" height="1200">
        </figure>
<?php endif; ?>
        <div class="row">
          <div class="single-content col-md-10 col-md-offset-1"><?php the_content(); ?></div>
        </div>
      </article>
      <div class="col-sm-1"></div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>