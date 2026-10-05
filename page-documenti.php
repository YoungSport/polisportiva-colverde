<?php get_header(); ?>
<section class="institutional-page">
  <header class="institutional-hero">
    <p class="eyebrow">TRASPARENZA</p>
    <h1>Documenti.</h1>
    <p class="institutional-lead">Una raccolta pubblica dei principali documenti della Polisportiva, consultabili da atleti, famiglie e cittadini.</p>
  </header>

  <div class="documents-grid">
    <a class="document-card" href="<?php echo esc_url(home_url('/safeguarding/')); ?>">
      <span class="document-card__meta"><strong>Safeguarding</strong><span>Policy e tutela</span></span>
      <span class="document-card__action">Consulta →</span>
    </a>
    <a class="document-card" href="<?php echo esc_url(home_url('/privacy-cookie/')); ?>">
      <span class="document-card__meta"><strong>Privacy & Cookie</strong><span>Informativa del sito</span></span>
      <span class="document-card__action">Consulta →</span>
    </a>

    <?php
    $attachments = get_posts([
      'post_type'      => 'attachment',
      'post_mime_type' => 'application/pdf',
      'post_status'    => 'inherit',
      'posts_per_page' => 100,
      'orderby'        => 'date',
      'order'          => 'DESC',
    ]);

    $keywords = ['statuto','safeguard','codice','modello','regolamento','privacy','cookie','trasparenza','organizzativo','condotta','bilancio'];

    foreach ($attachments as $doc) {
      $title = get_the_title($doc->ID);
      $haystack = strtolower(remove_accents($title));
      $important = false;
      foreach ($keywords as $keyword) {
        if (strpos($haystack, $keyword) !== false) { $important = true; break; }
      }
      if (!$important) continue;
      $url = wp_get_attachment_url($doc->ID);
      if (!$url) continue;
    ?>
      <a class="document-card" href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
        <span class="document-card__meta">
          <strong><?php echo esc_html($title); ?></strong>
          <span>PDF · <?php echo esc_html(get_the_date('d/m/Y', $doc->ID)); ?></span>
        </span>
        <span class="document-card__action">Apri PDF →</span>
      </a>
    <?php } ?>
  </div>
</section>
<?php get_footer(); ?>
