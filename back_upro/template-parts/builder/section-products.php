<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="product"<?php if($id) echo ' id="' . $id . '"' ?>>
    <div class="content-width">
      <div class="top">
        <div class="title">

          <?php if ($label): ?>
            <h6 class="label"><?= $label ?></h6>
          <?php endif ?>

          <?php if ($title): ?>
            <h2><?= $title ?></h2>
          <?php endif ?>

        </div>
        <div class="text">

          <?php if ($text): ?>
            <p><?= $text ?></p>
          <?php endif ?>

          <?php if ($link): ?>
            <div class="btn-wrap">
              <a href="<?= $link['url'] ?>" class="btn-default btn-red"<?php if($link['target']) echo ' target="_blank"' ?>>
                <span><?= $link['title'] ?></span>
                <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-3.svg" alt=""></span>
              </a>
            </div>
          <?php endif ?>

        </div>
      </div>

      <?php if (is_array($items) && checkArrayForValues($items)): ?>
      <div class="slider-wrap">
        <div class="nav-wrap">
          <div class="swiper-button-next product-next"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5.svg" alt=""></div>
          <div class="swiper-button-prev product-prev"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5.svg" alt=""></div>
        </div>
        <div class="swiper product-slider">
          <div class="swiper-wrapper">

            <?php foreach ($items as $item): 
              $is_product = $item['type'] == 'Product' && $item['product'];
              $is_category = $item['type'] == 'Category' && $item['category'];
              $is_item = $is_product || $is_category;

              $item_link_url = $item['link'] ? $item['link']['url'] : ($is_product ? get_permalink($item['product']->ID) : get_term_link($item['category']->term_id));
              $item_link_target = $item['link'] && $item['link']['target'] ? $item['link']['target'] : '';
              $item_image = $is_product ? get_the_post_thumbnail($item['product']->ID, 'full') : wp_get_attachment_image(get_field('image', 'term_' . $item['category']->term_id)['ID'], 'full');
              $item_title = $is_product ? $item['product']->post_title : $item['category']->name;
              ?>
              <?php if ($is_item): ?>
                <div class="swiper-slide<?php if($item['is_white']) echo ' swiper-slide-white' ?>">
                  <figure>
                    <a href="<?= $item_link_url ?>"<?php if($item_link_target) echo ' target="_blank"' ?>>
                      <?= $item_image ?>
                    </a>
                  </figure>
                  <div class="wrap">
                    <h6 class="label"><?php _e('backpackboyz', 'BackPack') ?></h6>
                    <h3>
                      <a href="<?= $item_link_url ?>"<?php if($item_link_target) echo ' target="_blank"' ?>><?= $item_title ?></a>
                    </h3>
                    <div class="btn-wrap">
                      <a href="<?= $item_link_url ?>" class="btn-default btn-red"<?php if($item_link_target) echo ' target="_blank"' ?>>
                        <span><?php _e('buy', 'BackPack') ?></span>
                        <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-4.svg" alt=""></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif ?>
            <?php endforeach ?>
            
          </div>
          <div class="swiper-pagination product-pagination"></div>
        </div>
      </div>
    <?php endif ?>

  </div>
</section>

<?php endif; ?>