<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="follow"<?php if($id) echo ' id="' . $id . '"' ?>>

    <?php if ($field = get_field('background_2', 'option')): ?>
      <div class="bg">
        <?= wp_get_attachment_image($field['ID'], 'full') ?>
      </div>
    <?php endif ?>

    <div class="content-width">
      <div class="title">

        <?php if ($field = get_field('label_2', 'option')): ?>
          <h6 class="label"><?= $field ?></h6>
        <?php endif ?>

        <?php if ($field = get_field('link_1_2', 'option')): ?>
          <h2>
            <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= html_entity_decode($field['title']) ?></a>
          </h2>
        <?php endif ?>

      </div>
      <div class="slider-wrap">

        <?php if($images = get_field('gallery_2', 'option')): ?>
          <div class="nav-wrap">
            <div class="swiper-button-next inst-next"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></div>
            <div class="swiper-button-prev inst-prev"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></div>
          </div>
          <div class="swiper inst-slider">
            <div class="swiper-wrapper">

              <?php foreach($images as $image): ?>

                <div class="swiper-slide ">
                  <a href="<?= $image['url'] ?>" data-fancybox="1">
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                  </a>
                </div>

              <?php endforeach; ?>

            </div>
            <div class="swiper-pagination inst-pagination"></div>
          </div>

        <?php endif; ?>

        <?php if ($field = get_field('link_2_2', 'option')): ?>
          <div class="btn-wrap">
            <a href="<?= $field['url'] ?>" class="btn-default btn-trans"<?php if($field['target']) echo ' target="_blank"' ?>>
              <span><?= html_entity_decode($field['title']) ?></span>
              <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.svg" alt=""></span>
            </a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>