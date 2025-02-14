</main>

<footer>

  <?php if ($field = get_field('background_f', 'option')): ?>
    <div class="bg">
      <?= wp_get_attachment_image($field['ID'], 'full') ?>
    </div>
  <?php endif ?>

  <div class="full-img">
    <figure></figure>
  </div>
  <div class="wrap">
    <div class="content-width">
      <div class="content">

        <?php if ($field = get_field('logo_f', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </a>
          </div>
        <?php endif ?>

        <?php $menu = wp_get_nav_menu_items(3) ?>

        <?php if ($menu): ?>
          <nav class="footer-menu">
            <ul>

              <?php foreach ($menu as $item): ?>
                <li>
                  <a href="<?= $item->url ?>"<?php if(get_field('is_popup', $item->ID)) echo ' class="fancybox"' ?><?php if($item->target) echo ' target="_blank"' ?>><?= $item->title ?></a>
                </li>
              <?php endforeach ?>

            </ul>
          </nav>
        <?php endif ?>

      </div>

      <?php if ($field = get_field('copyright_f', 'option')): ?>
        <div class="bottom">
          <p><?= $field ?></p>
        </div>
      <?php endif ?>

    </div>
  </div>
</footer>

<?php 
$fields = ['subtitle', 'title', 'items', 'link_text'];
foreach ($fields as $field) {
  $$field = get_field($field . '_p', 'option');
}
?>

<div id="popup" class="popup-default" style="display: none">
  <div class="wrap-main">

    <?php if ($subtitle): ?>
      <h6><?= $subtitle ?></h6>
    <?php endif ?>

    <?php if ($title): ?>
      <h2><?= $title ?></h2>
    <?php endif ?>

    <form action="#" class="popup-form">

      <?php $is_items = is_array($items) && checkArrayForValues($items) ?>

      <?php if ($is_items): ?>
        <?php foreach ($items as $index => $item): ?>
          <?php if ($item['link']): ?>
            <div class="input-wrap">
              <input type="radio" name="radio1" id="radio-<?= $index + 1 ?>" <?php if($index == 0) echo ' checked' ?> value="<?= $item['link']['url'] ?>">
              <label for="radio-<?= $index + 1 ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-9.svg"><?= $item['link']['title'] ?></label>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      <?php endif ?>

      <div class="btn-wrap">
        <a href="<?php if($is_items && $items[0]['link']) echo $items[0]['link']['url'] ?>" class="btn-default btn-red">
          <span><?= $link_text ?></span>
          <span><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-10.svg" alt=""></span>
        </a>
      </div>
    </form>
  </div>
</div>

<?php wp_footer() ?>
</body>
</html>