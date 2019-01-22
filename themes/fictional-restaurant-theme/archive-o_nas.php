<?php get_header(); ?>

<div class="col-8 col-s-8">
  <h1 class="pageTitle center">O Nas</h1>
  <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    ?>
    <div class="col-12" style="padding: 0;">
      <div class="col-7 displayFull">
      <div class="news_image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); width: 100%; height: 200px;"></div>
      </div>
      <div class="col-5">
      <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-7 displaySmall">
      <div class="news_image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); width: 100%; height: 200px;"></div>
      </div>
      <div>
      <?php the_content(); ?>
      </div>
    </div>
    <hr>
    <?php
  }
  }
  ?>
</div>

</div>
<?php get_template_part('template-parts/content', 'blog'); ?>
<?php get_footer(); ?>
