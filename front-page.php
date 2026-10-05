<?php get_header(); ?>

<section class="hero hero--editorial">
  <div class="hero__media">
    <img src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-Volley-U18-1536x864.jpg" alt="Pallavolo Polisportiva Colverde">
  </div>
  <div class="hero__shade"></div>

  <div class="hero__content">
    <p class="eyebrow">POLISPORTIVA COLVERDE · DAL 2014</p>
    <h1>SPORT.<br>TERRITORIO.<br>COMUNITÀ.</h1>
    <p class="hero__lead">Cinque discipline. Un’unica identità. Lo sport come luogo di crescita, appartenenza e futuro.</p>
    <div class="hero__actions">
      <a class="btn btn--light" href="#sport">Scopri i nostri sport</a>
      <a class="btn btn--outline" href="<?php echo esc_url(home_url('/la-societa-2/')); ?>">La Polisportiva</a>
    </div>
  </div>

  <div class="hero__rail">
    <a href="<?php echo esc_url(home_url('/squadre/pallavolo/')); ?>">Pallavolo <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/squadre/calcio/')); ?>">Calcio <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/squadre/ginnastica-artistica/')); ?>">Ginnastica <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/squadre/atletica/')); ?>">Atletica <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/squadre/avviamento-allo-sport/')); ?>">Avviamento <span>↗</span></a>
  </div>
</section>

<section class="ticker">
  <div class="ticker__inner">
    <span>#SIAMOCOLVERDE</span>
    <span>SPORT</span>
    <span>PASSIONE</span>
    <span>COMUNITÀ</span>
    <span>TERRITORIO</span>
  </div>
</section>

<section id="sport" class="section sports sports--editorial">
  <div class="section-head section-head--editorial">
    <div>
      <p class="eyebrow eyebrow--green">I NOSTRI SPORT</p>
      <h2>Una Polisportiva.<br>Cinque mondi.</h2>
    </div>
    <p class="section-intro">Dai primi passi fino all’attività agonistica. Percorsi diversi, una sola maglia.</p>
  </div>

  <div class="sports-grid sports-grid--pro">
    <a class="sport-card sport-card--wide" href="<?php echo esc_url(home_url('/squadre/pallavolo/')); ?>">
      <img class="tile-img" src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-Volley-U16-1536x864.jpg" alt="Pallavolo">
      <span class="sport-card__number">01</span>
      <div class="sport-card__title"><h3>Pallavolo</h3><span>Scopri →</span></div>
    </a>

    <a class="sport-card" href="<?php echo esc_url(home_url('/squadre/calcio/')); ?>">
      <img class="tile-img" src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-Calcio-PCalci_PAmici-1536x870.jpg" alt="Calcio">
      <span class="sport-card__number">02</span>
      <div class="sport-card__title"><h3>Calcio</h3><span>Scopri →</span></div>
    </a>

    <a class="sport-card" href="<?php echo esc_url(home_url('/squadre/ginnastica-artistica/')); ?>">
      <img class="tile-img" src="https://polisportivacolverde.it/site/wp-content/uploads/2023/11/Corso-rosso-agonistica-Silver-FGI-1086x1536.jpg" alt="Ginnastica Artistica">
      <span class="sport-card__number">03</span>
      <div class="sport-card__title"><h3>Ginnastica</h3><span>Scopri →</span></div>
    </a>

    <a class="sport-card" href="<?php echo esc_url(home_url('/squadre/atletica/')); ?>">
      <img class="tile-img" src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-ATL-Eso-1536x882.jpg" alt="Atletica">
      <span class="sport-card__number">04</span>
      <div class="sport-card__title"><h3>Atletica</h3><span>Scopri →</span></div>
    </a>

    <a class="sport-card" href="<?php echo esc_url(home_url('/squadre/avviamento-allo-sport/')); ?>">
      <img class="tile-img" src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-AvvSport-1536x870.jpg" alt="Avviamento allo Sport">
      <span class="sport-card__number">05</span>
      <div class="sport-card__title"><h3>Avviamento</h3><span>Scopri →</span></div>
    </a>
  </div>
</section>

<section class="manifesto">
  <div class="manifesto__copy">
    <p class="eyebrow">#SIAMOCOLVERDE</p>
    <h2>Non solo una società.<br>Una comunità sportiva.</h2>
    <p>Nata dall’unione delle realtà sportive di Drezzo, Gironico e Parè, la Polisportiva Colverde accompagna bambini, ragazzi e adulti attraverso sport, educazione e appartenenza.</p>
    <a class="manifesto__link" href="<?php echo esc_url(home_url('/la-societa-2/')); ?>">La nostra storia →</a>
  </div>
  <div class="manifesto__media">
    <img src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-ATL-RaCaAs-1536x870.jpg" alt="Atletica Polisportiva Colverde">
  </div>
</section>

<section class="section news-section">
  <div class="section-head section-head--editorial">
    <div>
      <p class="eyebrow eyebrow--green">NEWS IN EVIDENZA</p>
      <h2>Dal mondo<br>Colverde.</h2>
    </div>
    <a class="text-link text-link--dark" href="<?php echo esc_url(home_url('/eventi/')); ?>">Tutte le news →</a>
  </div>

  <div class="news-grid news-grid--editorial">
    <?php
    $colverde_news = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);
    if ($colverde_news->have_posts()) :
      while ($colverde_news->have_posts()) : $colverde_news->the_post(); ?>
        <article class="news-card news-card--editorial">
          <a href="<?php the_permalink(); ?>">
            <div class="news-card__image">
              <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
            </div>
            <div class="news-card__meta">
              <time><?php echo esc_html(get_the_date('d.m.Y')); ?></time>
              <span>NEWS</span>
            </div>
            <h3><?php the_title(); ?></h3>
            <span class="news-card__read">Leggi →</span>
          </a>
        </article>
      <?php endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>
</section>

<section class="join join--pro">
  <div class="join__content">
    <p class="eyebrow">ENTRA NEL MONDO COLVERDE</p>
    <h2>Il tuo sport<br>comincia qui.</h2>
  </div>
  <div class="join__actions">
    <a href="<?php echo esc_url(home_url('/contatti/')); ?>">Contattaci <span>↗</span></a>
    <a href="#sport">Scopri gli sport <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/safeguarding/')); ?>">Safeguarding <span>↗</span></a>
  </div>
</section>

<?php get_footer(); ?>
