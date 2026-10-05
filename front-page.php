<?php get_header(); ?>

<section class="home-carousel" aria-label="In evidenza">
  <div class="home-carousel__track">

    <article class="home-slide is-active">
      <img class="home-slide__image" src="https://polisportivacolverde.it/site/wp-content/uploads/2026/10/Collage-sportivo-giovanile-in-verde.png" alt="Le attività della Polisportiva Colverde">
      <div class="home-slide__shade"></div>
      <div class="home-slide__content">
        <p class="eyebrow">POLISPORTIVA COLVERDE · DAL 2014</p>
        <h1>PIÙ SPORT.<br>UNA SOLA COMUNITÀ.</h1>
        <p>Scopri tutte le opportunità sportive e i progetti Colverde.</p>
        <div class="hero__actions">
          <a class="btn btn--light" href="#sport">Scopri le attività</a>
          <a class="btn btn--outline" href="<?php echo esc_url(home_url('/storia/')); ?>">La nostra storia</a>
        </div>
      </div>
    </article>

    <article class="home-slide">
      <img class="home-slide__image" src="https://polisportivacolverde.it/site/wp-content/uploads/2022/08/20220828-ATL-RaCaAs-1536x870.jpg" alt="Atletica Polisportiva Colverde">
      <div class="home-slide__shade"></div>
      <div class="home-slide__content">
        <p class="eyebrow">CRESCERE ATTRAVERSO LO SPORT</p>
        <h2>DALLA PRIMA PROVA<br>ALLA PASSIONE.</h2>
        <p>Bambini, ragazzi e adulti: Colverde è un luogo dove allenarsi, imparare e sentirsi parte di qualcosa.</p>
        <div class="hero__actions">
          <a class="btn btn--light" href="#sport">Trova la tua attività</a>
        </div>
      </div>
    </article>

    <article class="home-slide">
      <img class="home-slide__image" src="https://polisportivacolverde.it/site/wp-content/uploads/2026/07/2026-07-19_Anteprima-Quadrata_Collaborazione_Colverde_YoungSport_Aurora.png" alt="Progetti Polisportiva Colverde">
      <div class="home-slide__shade"></div>
      <div class="home-slide__content">
        <p class="eyebrow">INSIEME PER CRESCERE</p>
        <h2>UNA RETE<br>SUL TERRITORIO.</h2>
        <p>Collaborazioni, impianti, tecnici e comunità: costruiamo opportunità sportive per il territorio.</p>
        <div class="hero__actions">
          <a class="btn btn--light" href="<?php echo esc_url(home_url('/contatti/')); ?>">Contattaci</a>
        </div>
      </div>
    </article>

  </div>

  <button class="home-carousel__arrow home-carousel__arrow--prev" type="button" aria-label="Slide precedente">‹</button>
  <button class="home-carousel__arrow home-carousel__arrow--next" type="button" aria-label="Slide successiva">›</button>

  <div class="home-carousel__dots" aria-label="Seleziona slide">
    <button class="is-active" type="button" aria-label="Slide 1"></button>
    <button type="button" aria-label="Slide 2"></button>
    <button type="button" aria-label="Slide 3"></button>
  </div>
</section>

<section class="federations">
  <div class="federations__inner">
    <div class="federations__label">
      <span>Affiliati e riconosciuti</span>
      <strong>Le nostre federazioni</strong>
    </div>

    <div class="federations__logos">
      <a href="https://www.centrosportivoitaliano.it/" target="_blank" rel="noopener">
        <img src="https://images.seeklogo.com/logo-png/3/1/csi-logo-png_seeklogo-37159.png" alt="CSI Centro Sportivo Italiano">
      </a>
      <a href="https://www.fidal.it/" target="_blank" rel="noopener">
        <img src="https://www.fidal.it/themes/markup/images/logo_fidal_atletica_italiana.svg" alt="FIDAL">
      </a>
      <a href="https://www.federvolley.it/" target="_blank" rel="noopener">
        <img src="https://www.federvolley.it/logo-fipav.png" alt="FIPAV">
      </a>
      <a href="https://www.federginnastica.it/" target="_blank" rel="noopener">
        <img src="https://images.seeklogo.com/logo-png/22/1/federazione-ginnastica-ditalia-logo-png_seeklogo-225657.png" alt="FGI Federazione Ginnastica d'Italia">
      </a>
      <a href="https://www.libertasnazionale.it/" target="_blank" rel="noopener">
        <img src="https://www.libertasnazionale.it/wp-content/uploads/2024/04/LOGO-LIBERTAS-2.png" alt="Libertas">
      </a>
    </div>
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
      <p class="eyebrow eyebrow--green">SPORT, CORSI E PROGETTI</p>
      <h2>Trova il tuo<br>mondo Colverde.</h2>
    </div>
    <p class="section-intro">Attività sportive, percorsi di crescita e nuove esperienze per bambini, ragazzi e adulti.</p>
  </div>

  <div class="sports-grid sports-grid--six">
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

    <a class="sport-card sport-card--graphic sport-card--ninja" href="<?php echo esc_url(home_url('/contatti/')); ?>">
      <span class="sport-card__number">05</span>
      <span class="sport-card__graphic-word">NINJA</span>
      <div class="sport-card__title"><h3>Ninja Trainer</h3><span>Info →</span></div>
    </a>

    <a class="sport-card sport-card--graphic sport-card--mini4wd" href="<?php echo esc_url(home_url('/contatti/')); ?>">
      <span class="sport-card__number">06</span>
      <span class="sport-card__graphic-word">4WD</span>
      <div class="sport-card__title"><h3>Mini4WD</h3><span>Info →</span></div>
    </a>
  </div>
</section>


<section class="section know-colverde">
  <div class="section-head section-head--editorial">
    <div>
      <p class="eyebrow eyebrow--green">CONOSCI COLVERDE</p>
      <h2>Una società<br>trasparente.</h2>
    </div>
    <p class="section-intro">Storia, persone e documenti: tutto quello che serve per conoscere davvero la Polisportiva.</p>
  </div>

  <div class="know-grid">
    <a class="know-card" href="<?php echo esc_url(home_url('/storia/')); ?>">
      <span class="know-card__index">01</span>
      <h3>La nostra storia</h3>
      <p>Dal 2014, sport e territorio crescono insieme.</p>
      <span>Scopri →</span>
    </a>
    <a class="know-card" href="<?php echo esc_url(home_url('/consiglio-direttivo/')); ?>">
      <span class="know-card__index">02</span>
      <h3>Consiglio Direttivo</h3>
      <p>Chi guida e rappresenta la Polisportiva Colverde.</p>
      <span>Conosci le persone →</span>
    </a>
    <a class="know-card" href="<?php echo esc_url(home_url('/documenti/')); ?>">
      <span class="know-card__index">03</span>
      <h3>Documenti pubblici</h3>
      <p>Statuto, safeguarding, regolamenti e documenti utili.</p>
      <span>Consulta →</span>
    </a>
  </div>
</section>

<section class="manifesto">
  <div class="manifesto__copy">
    <p class="eyebrow">#SIAMOCOLVERDE</p>
    <h2>Non solo una società.<br>Una comunità sportiva.</h2>
    <p>Nata dall’unione delle realtà sportive di Drezzo, Gironico e Parè, la Polisportiva Colverde accompagna bambini, ragazzi e adulti attraverso sport, educazione e appartenenza.</p>
    <a class="manifesto__link" href="<?php echo esc_url(home_url('/storia/')); ?>">La nostra storia →</a>
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
    <a href="#sport">Scopri le attività <span>↗</span></a>
    <a href="<?php echo esc_url(home_url('/safeguarding/')); ?>">Safeguarding <span>↗</span></a>
  </div>
</section>

<?php get_footer(); ?>
