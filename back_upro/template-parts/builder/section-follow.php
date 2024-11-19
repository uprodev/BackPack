<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="follow"<?php if($id) echo ' id="' . $id . '"' ?>>

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
      </div>
    <?php endif ?>

    <div class="content-width">
      <div class="title">

        <?php if ($label): ?>
          <h6 class="label"><?= $label ?></h6>
        <?php endif ?>

        <?php if ($link_1): ?>
          <h2>
            <a href="<?= $link_1['url'] ?>"<?php if($link_1['target']) echo ' target="_blank"' ?>><?= $link_1['title'] ?></a>
          </h2>
        <?php endif ?>

      </div>
      <div class="slider-wrap">

        <?php if($gallery): ?>
          <div class="nav-wrap">
            <div class="swiper-button-next inst-next"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></div>
            <div class="swiper-button-prev inst-prev"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></div>
          </div>
          <div class="swiper inst-slider">
            <div class="swiper-wrapper">

              <?php foreach($gallery as $image): ?>

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

        <?php if ($link_2): ?>
          <div class="btn-wrap">
            <a href="<?= $link_2['url'] ?>" class="btn-default btn-trans"<?php if($link_2['target']) echo ' target="_blank"' ?>>
              <span><?= $link_2_text ?: $link_2['title'] ?></span>
              <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.svg" alt=""></span>
            </a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>