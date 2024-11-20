<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="about-banner"<?php if($id) echo ' id="' . $id . '"' ?>>

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="content-width">
      <div class="content">

        <?php if ($image): ?>
          <figure>
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </figure>
        <?php endif ?>
        
        <div class="text">

          <?php if ($label): ?>
            <h6 class="label"><?= $label ?></h6>
          <?php endif ?>

          <?php if ($title): ?>
            <h1><?= $title ?></h1>
          <?php endif ?>

          <?= $text ?>

        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>