<a class="brand navbar-brand pull-left" href="<?= $params['base_page'] . $params['index']->getUri(); ?>">
  <?php if ($params['image']) {
      echo '<img class="homepage-image img-responsive" src="/' . $params['logo-navbar'] . '" alt="' . $params['title'] . '">';
  } ?>
</a>
