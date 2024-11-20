<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if ($form): ?>
    <section class="contact-banner">
      <div class="bg"></div>
      <div class="content-width">
        <div class="content">

          <?php if ($title): ?>
            <h1><?= $title ?></h1>
          <?php endif ?>
          
          <?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="form-contact"]') ?>
          
        </div>
      </div>
    </section>
  <?php endif ?>

  <?php endif; ?>