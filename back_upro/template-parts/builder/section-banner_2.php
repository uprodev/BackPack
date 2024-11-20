<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="locations-banner"<?php if($id) echo ' id="' . $id . '"' ?>>

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="content-width">
      <div class="content">

        <?php if ($title): ?>
          <h1><?= $title ?></h1>
        <?php endif ?>

        <?php if ($image): ?>
          <figure>
            <?= wp_get_attachment_image($image['ID'], 'full') ?>
          </figure>
        <?php endif ?>
        
      </div>
    </div>
  </section>

  <?php endif; ?>