<?php get_header(); ?>

<div class="wrapper group">
  <div class="container mid group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content-wrapper group" id="post-<?php the_ID(); ?>">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>