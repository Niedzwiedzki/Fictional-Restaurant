<?php get_header(); ?>
  <div class="col-8 col-s-8">
    <h1 class='title'>Najlepsze na mieście</h1>
    <p>Lorem ipsum dolor sit amet, utamur expetenda ut nec, veri animal impetus sit an. Alia modus utroque nec ex. Quo corpora argumentum at, semper eloquentiam ius an, vis oblique mnesarchum definiebas no. Ei sint iriure labores sea. Quo ei esse torquatos pertinacia, te clita saepe vis, cum splendide urbanitas cotidieque no. Hinc consulatu definitionem vix ex. Minim tollit eu vel. Per verear option deleniti id, eruditi salutandi laboramus eos ei, ius eligendi verterem ex. Mea ad saepe lucilius, oblique intellegam at sed, equidem maiestatis mnesarchum ius eu. Detracto inimicus eos ei. Agam qualisque vim no, agam graeci quidam nec ne, pro dicat suscipiantur eu.</p>
  </div>
    <div class="col-12">
    <div class="col-6 center">
      <div class="border_content">
      <h1>Nasze wina</h1>
        <?php
        $wines = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'wine',
          'order' => 'ASC'
        ));
        $displayClass = '';
        ?>
          <div class="left_arrow carousel_button">
            <i class="fas fa-angle-left"></i>
          </div>
          <div class="right_arrow carousel_button">
            <i class="fas fa-angle-right"></i>
          </div>
        <?php
        while($wines->have_posts()) {
          $wines->the_post();
          ?>
          <div class="<?php echo $displayClass ?> wine_container">
          <div class="wine_image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
          </div>
          <h2> <?php the_title(); ?> </h2>
          </div>
          <?php
          $displayClass = 'hide';
       }
      ?>
      </div>
    </div>
    <div class="col-6 center">
      <div class="border_content">
      <h1>Tu jesteśmy:</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.926561082668!2d19.91861391599608!3d50.06893697942461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b80a9110e31%3A0xd9fd97e6d7909cd1!2sFictional+Restaurant!5e0!3m2!1spl!2spl!4v1547983906624" width="100%" height="280px" frameborder="0" style="border:0" allowfullscreen></iframe>
      <h2>tel: 123 456 789</h2>
    </div>
    </div>
  </div>
</div>
<?php get_template_part('template-parts/content', 'blog'); ?>
<?php get_footer(); ?>
