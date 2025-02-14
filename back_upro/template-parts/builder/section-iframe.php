<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if ($iframe): ?>
    <section class="iframe"<?php if($background_image) echo ' style="background-image: url(' . $background_image['url'] . ');"' ?>>
      <div class="content-width">
        <div class="content">

          <?php if ($title): ?>
            <h1><?= $title ?></h1>
          <?php endif ?>

          <?php if ($subtitle): ?>
            <h2><?= $subtitle ?></h2>
          <?php endif ?>
          
          <?= $iframe ?>
          
        </div>
      </div>
    </section>
  <?php endif ?>

  <?php endif; ?>