<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="location"<?php if($id) echo ' id="' . $id . '"' ?>>
    <div class="content-width">

      <?php if ($label): ?>
        <h6 class="label"><?= $label ?></h6>
      <?php endif ?>
      
      <?php if ($title): ?>
        <h2><?= $title ?></h2>
      <?php endif ?>
      
      <div class="content">

        <?php if ($text_1): ?>
          <div class="left"><?= $text_1 ?></div>
        <?php endif ?>
        
        <?php if ($image): ?>
          <div class="right">
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </div>
        <?php endif ?>
        
        <?php if ($text_2): ?>
          <div class="bottom-left">
            <h3><?= $text_2 ?></h3>
          </div>
        <?php endif ?>
        
        <?php if ($link): ?>
          <div class="bottom-right">
            <a href="<?= $link['url'] ?>" class="btn"<?php if($link['target']) echo ' target="_blank"' ?>>
              <?= $link['title'] ?> 
              <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt="">
            </a>
          </div>
        <?php endif ?>
        
      </div>
    </div>
  </section>

  <?php endif; ?>