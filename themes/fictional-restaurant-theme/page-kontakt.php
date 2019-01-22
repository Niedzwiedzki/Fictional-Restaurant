<?php get_header(); ?>

<div class="border_content col-8 col-s-8 center">
<h1>Tu jesteśmy:</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.926561082668!2d19.91861391599608!3d50.06893697942461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b80a9110e31%3A0xd9fd97e6d7909cd1!2sFictional+Restaurant!5e0!3m2!1spl!2spl!4v1547983906624" width="100%" height="280px" frameborder="0" style="border:0" allowfullscreen></iframe>
<h2>tel: 123 456 789</h2>
<p class='center'>ul. Konarskiego 48/12</p>
<p class='center'>30-046 Kraków</p>
</div>

</div>

<div class="col-4 center">
  <div class="border_content normal_padding">
    <h1>Zarezerwuj stolik</h1>
  <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    the_content();
  }
  }
  ?>
  </div>
</div>

<?php get_footer(); ?>
