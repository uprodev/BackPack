<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="home-banner"<?php if($id) echo ' id="' . $id . '"' ?> data-rellax-speed="-1">

    <?php if ($background): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background['ID'], 'full') ?>
        <?php if ($video): ?>
          <div class="video-wrap ">
            <video autoplay="true" loop muted>
              <source src="<?= $video['url'] ?>" type='<?= $video['mime_type'] ?>'>
            </video>
          </div>
        <?php endif ?>
      </div>
    <?php endif ?>

    <div class="content-width">
      <div class="content">



            <?php if ($video): ?>
              <h1  class=""><a href="#popup" class="fancybox">Order Online</a></h1>
            <?php endif ?>

          </div>
        </div>
      </section>

      <?php endif; ?>