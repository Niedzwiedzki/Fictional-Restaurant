<!DOCTYPE html>
<html <?php language_attributes() ?> >
  <head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
  <div>
    <div class="header">
      <a href="<?php echo site_url('/') ?>"><h1 class = "header-margin biggerFont">EatWellll</h1></a>
        <div class = "header-margin phone_hide" id='hamburger'>
          <div></div>
          <div></div>
          <div></div>
        </div>
    </div>
    <div class="hide" id="dropdown-content" class="phone_hide">
      <ul class="list">
        <li><a href="<?php echo site_url('/') ?>">Strona główna</a></li><hr>
        <li><a href="<?php echo site_url('/o_nas') ?>">O nas</a></li><hr>
        <li><a href="<?php echo site_url('/menu') ?>">Menu</a></li><hr>
        <li><a href="<?php echo site_url('/kontakt') ?>">Kontakt/Rezerwacja</a></li><hr>
        <li><a href="<?php echo site_url('/infos') ?>">Blog Szefa kuchni</a></li>
      </ul>
    </div>
  </div>
  <div class = 'banner' style="background-image: url(<?php echo get_theme_file_uri('images/various-spices-and-herbs-website-header.jpg') ?>);"></div>
  <div class="row">
    <div class="col-8">
      <div class="col-4 col-s-4 menu">
        <ul class="list">
          <li><a href="<?php echo site_url('/') ?>">Strona główna</a></li>
          <li><a href="<?php echo site_url('/o_nas') ?>">O nas</a></li>
          <li><a href="<?php echo site_url('/menu') ?>">Menu</a></li>
          <li><a href="<?php echo site_url('/kontakt') ?>">Kontakt/Rezerwacja</a></li>
          <li><a href="<?php echo site_url('/infos') ?>">Blog Szefa kuchni</a></li>
        </ul>
      </div>
