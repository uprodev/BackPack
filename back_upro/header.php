<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="content-width">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </a>
          </div>
        <?php endif ?>
        
        <?php if ($logo = get_field('logo_2_h', 'option')): ?>
          <div class="info">
            
            <?php if ($link = get_field('logo_2_link_h', 'option')): ?>
              <a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>>
              <?php endif ?>
              
              <?= wp_get_attachment_image($logo['ID'], 'full') ?>
              
              <?php if ($link = get_field('logo_2_link_h', 'option')): ?>
              </a>
            <?php endif ?>
            
          </div>
        <?php endif ?>
        
        <div class="right">

          <?php if ($field = get_field('link_h', 'option')): ?>
            <div class="order">
              <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

          <div class="open-menu">
            <a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/img/menu.svg" alt=""></a>
          </div>
        </div>
        
      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
      <div class="close-menu">
        <a href="#">
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
    <div class="wrap">

      <?php if ($field = get_field('logo_h', 'option')): ?>
        <div class="logo-wrap">
          <a href="<?= get_home_url() ?>">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </a>
        </div>
      <?php endif ?>
      
      <nav class="mob-menu-wrap">

        <?php wp_nav_menu( array(
          'theme_location'  => 'header',
          'container'       => '',
          'items_wrap'      => '<ul class="mob-menu">%3$s</ul>'
        )); ?>

      </nav>
    </div>
  </div>

  <main>