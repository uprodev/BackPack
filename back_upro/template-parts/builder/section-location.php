<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (($items = get_field('items_1', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
  <section class="location location-info"<?php if($id) echo ' id="' . $id . '"' ?>>
    <div class="bg"></div>
    <div class="content-width">

      <?php if ($field = get_field('label_1', 'option')): ?>
        <h6 class="label"><?= $field ?></h6>
      <?php endif ?>
      
      <ul class="accordion">

        <?php foreach ($items as $index => $item): ?>
          <li class="accordion-item<?php if($index == 0) echo ' is-active' ?>">
            <div class="accordion-thumb"><h2><?= $item['title'] ?></h2></div>
            <div class="accordion-panel">
              <div class="content">

                <?php if ($item['text_1']): ?>
                  <div class="left"><?= $item['text_1'] ?></div>
                <?php endif ?>

                <?php if ($item['image']): ?>
                  <div class="right">
                    <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                  </div>
                <?php endif ?>

                <?php if ($item['text_2']): ?>
                  <div class="bottom-left"><?= $item['text_2'] ?></div>
                <?php endif ?>

                <?php if ($item['link']): ?>
                  <div class="bottom-right">
                    <a href="<?= $item['link']['url'] ?>" class="btn"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                      <?= $item['link']['title'] ?>
                      <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt=""></a>
                    </div>
                  <?php endif ?>

                </div>
              </div>
            </li>
          <?php endforeach ?>

        </ul>
      </div>
    </section>
  <?php endif ?>

  <?php endif; ?>