<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="text-img"<?php if($id) echo ' id="' . $id . '"' ?>>
    <div class="bg"></div>
    <div class="content-width">
      <div class="content">
        <div class="text">

          <?php if ($label): ?>
            <h6 class="label"><?= $label ?></h6>
          <?php endif ?>

          <?php if ($title): ?>
            <h2><?= $title ?></h2>
          <?php endif ?>

          <?= $text ?>

          <?php if ($link): ?>
            <div class="btn-wrap">
              <a href="<?= $link['url'] ?>" class="btn-default btn-min-h btn-black"<?php if($link['target']) echo ' target="_blank"' ?>>
                <span><?= html_entity_decode($link['title']) ?></span>
                <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.svg" alt=""></span>
              </a>
            </div>
          <?php endif ?>

        </div>

        <?php if ($image): ?>
          <figure>
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </figure>
        <?php endif ?>

      </div>
    </div>
  </section>

  <?php endif; ?>