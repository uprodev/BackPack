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
        
        <nav class="footer-menu">

          <?php wp_nav_menu( array(
            'theme_location'  => 'footer',
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          )); ?>

        </nav>
      </div>

      <?php if ($field = get_field('copyright_f', 'option')): ?>
        <div class="bottom">
          <p><?= $field ?></p>
        </div>
      <?php endif ?>

    </div>
  </div>
</footer>

<?php wp_footer() ?>
</body>
</html>