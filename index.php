<?php get_header(); ?>
  <div class="container mid">
    <div class="row home-row">
<?php $counter=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="list-item col-sm-4">
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
              <img src="http://placehold.it/360x240">
            </figure>
<?php endif; ?>
          </a>
        </figure>
        <h3 class="item-header">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="item-description"><?php the_excerpt(); ?></div>
      </article>
<?php $counter++; ?>
<?php if ($counter % 3 == 0) : ?>
    </div>
    <div class="row home-row">
<?php endif; ?>
<?php endwhile; endif; ?>
    </div>
  </div>
<?php get_footer(); ?>