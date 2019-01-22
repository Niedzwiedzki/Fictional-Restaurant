<?php get_header(); ?>
<div class="col-8 col-s-8 center">
  <h1 class="pageTitle">Menu</h1>
<?php
function showDishes($categoryName) {
  while (have_posts()) {
    the_post();
    if(get_field('kategorie')[0]->post_content == $categoryName){
      $title = get_the_title() . '&nbsp;&nbsp;&nbsp;';
    ?>
    <div class='clearfix'>
    <p class='dish'><?php echo $title ?></p><p class='price'><?php echo get_field('cena'); ?> PLN</p>
    </div>
    <hr class="border_menu">
 <?php
    }
  }
}
 ?>

 <?php
   $menuCategories = new WP_Query(array(
     'posts_per_page' => -1,
     'post_type' => 'categories',
     'order' => 'ASC'
   ));
   while($menuCategories->have_posts()) {
     $menuCategories->the_post();
     $categoryName = get_the_content();
     ?>
     <h3><?php the_content(); ?></h3>
  <?php
    showDishes($categoryName);
  }
 ?>
</div>
</div>
<?php get_template_part('template-parts/content', 'blog'); ?>
<?php get_footer(); ?>
