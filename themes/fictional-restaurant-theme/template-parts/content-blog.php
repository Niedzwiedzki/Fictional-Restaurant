<div class="col-4">
  <div class="col-12">
    <div class="aside orange_background">
      <a href="<?php echo site_url('/infos'); ?>"><h1>KULINARNE NEWSY</h1></a>
      <hr class="border_news">
      <?php
        $infos = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'infos',
          'order' => 'ASC'
        ));
        while($infos->have_posts()) {
          $infos->the_post();
          ?>
          <a class='info' href="<?php echo get_the_permalink(); ?>">
          <div class="news_image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="hover_image">
            <div class="align_left"><h1 class="news_text"> <?php the_title(); ?> </h1></div>
            <div class="news_text description"><?php the_field('opis'); ?></div>
            </div>
          </div>
          </a>
          <hr class="border_news">
          <?php
       }
      ?>
    </div>
  </div>
</div>
