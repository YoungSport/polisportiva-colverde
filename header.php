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
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Polisportiva Colverde">
      <span class="brand__logo-shell">
        <img class="brand__logo" src="https://polisportivacolverde.it/site/wp-content/uploads/2026/10/Screenshot-2026-06-30-alle-11.55.00-1.png" alt="Polisportiva Colverde">
      </span>
    </a>

    <nav class="main-nav" aria-label="Navigazione principale">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/storia/')); ?>">La Polisportiva</a>
      <a href="<?php echo esc_url(home_url('/#sport')); ?>">Sport</a>
      <a href="<?php echo esc_url(home_url('/dove-siamo/')); ?>">Impianti</a>
      <a href="<?php echo esc_url(home_url('/eventi/')); ?>">Eventi</a>
      <a href="<?php echo esc_url(home_url('/documenti/')); ?>">Documenti</a>
      <a class="nav-cta" href="<?php echo esc_url(home_url('/contatti/')); ?>">Contatti</a>
    </nav>
  </div>
</header>
<main>
