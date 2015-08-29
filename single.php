<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="single-intro">
    <div class="container">
     <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
      <h1 class="single-header"><?php the_title(); ?> </h1>
      <p class="item-date"><?php echo get_the_date(); ?><br><?php echo get_the_author(); ?></p>
      <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;layout=button_count&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:20px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
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
          <div class="single-content col-md-10 col-md-offset-1">
            <?php the_content(); ?>
            <div class="related-posts">
<?php $posts = get_field('related_posts'); if( $posts ): ?>
 <div class="row">
   <div class="col-sm-12">
     <h2>Read More!</h2>
   </div>
 </div>
  <div class="row">
    
    <?php foreach( $posts as $post): ?>
    <?php setup_postdata($post); ?>
     
      <article class="list-item col-sm-6">
        <p class="item-date"><?php echo get_the_date(); ?></p>
        <figure>
          <a href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ) : ?>
<?php $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-small' ); ?>    
            <figure>
              <img class="item-img" src="<?php echo $small_image_url[0]; ?>" alt="<?php the_title(); ?>">
            </figure>
<?php else: ?>
            <figure>
              <img class="item-img" src="http://placehold.it/360x240">
            </figure>
<?php endif; ?>
          </a>
        </figure>
        <h3 class="item-header">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="item-description"><?php the_excerpt(); ?></div>
      </article>
      
    <?php endforeach; ?>
  <div class="row">
    <?php wp_reset_postdata(); ?>
    
<?php endif; ?>
            </div>
          </div>
        </div>
      </article>
      <div class="col-sm-1"></div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>