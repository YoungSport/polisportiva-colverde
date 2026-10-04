<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php
      if (has_custom_logo()) {
          the_custom_logo();
      } else {
          bloginfo('name');
      }
      ?>
    </a>

    <nav class="main-nav" aria-label="Navigazione principale">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => false,
      ]);
      ?>
    </nav>
  </div>
</header>
<main>
