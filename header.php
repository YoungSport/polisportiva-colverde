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
      <span class="brand__mark">PC</span>
      <span class="brand__text">POLISPORTIVA<br>COLVERDE</span>
    </a>

    <nav class="main-nav" aria-label="Navigazione principale">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/la-societa-2/')); ?>">La Polisportiva</a>
      <a href="<?php echo esc_url(home_url('/#sport')); ?>">Sport</a>
      <a href="<?php echo esc_url(home_url('/dove-siamo/')); ?>">Impianti</a>
      <a href="<?php echo esc_url(home_url('/eventi/')); ?>">Eventi</a>
      <a href="<?php echo esc_url(home_url('/safeguarding/')); ?>">Safeguarding</a>
      <a class="nav-cta" href="<?php echo esc_url(home_url('/contatti/')); ?>">Contatti</a>
    </nav>
  </div>
</header>
<main>
