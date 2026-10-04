<?php get_header(); ?>

<section class="hero">
  <div class="hero__inner">
    <div class="hero__copy">
      <p class="eyebrow">DAL 2014 · COLVERDE</p>
      <h1>SPORT.<br>TERRITORIO.<br>COMUNITÀ.</h1>
      <p class="hero__lead">Cinque discipline, un’unica Polisportiva. Cresciamo attraverso lo sport, insieme.</p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="#sport">Scopri i nostri sport</a>
        <a class="btn btn--ghost" href="<?php echo esc_url(home_url('/la-societa-2/')); ?>">Chi siamo</a>
      </div>
    </div>

    <div class="hero-grid" aria-label="Gli sport della Polisportiva Colverde">
      <a class="hero-tile hero-tile--volley" href="<?php echo esc_url(home_url('/squadre/pallavolo/')); ?>"><span>Pallavolo</span></a>
      <a class="hero-tile hero-tile--calcio" href="<?php echo esc_url(home_url('/squadre/calcio/')); ?>"><span>Calcio</span></a>
      <a class="hero-tile hero-tile--atletica" href="<?php echo esc_url(home_url('/squadre/atletica/')); ?>"><span>Atletica</span></a>
      <a class="hero-tile hero-tile--avviamento" href="<?php echo esc_url(home_url('/squadre/avviamento-allo-sport/')); ?>"><span>Avviamento</span></a>
    </div>
  </div>
</section>

<section id="sport" class="section sports">
  <div class="section-head">
    <div>
      <p class="eyebrow eyebrow--green">I NOSTRI SPORT</p>
      <h2>C’è un posto per tutti.</h2>
    </div>
    <p class="section-intro">Dai primi passi nello sport all’attività agonistica: percorsi diversi, stessa identità.</p>
  </div>

  <div class="sports-grid">
    <a class="sport-card sport-card--volley" href="<?php echo esc_url(home_url('/squadre/pallavolo/')); ?>">
      <span class="sport-card__number">01</span><h3>Pallavolo</h3><span class="sport-card__arrow">↗</span>
    </a>
    <a class="sport-card sport-card--calcio" href="<?php echo esc_url(home_url('/squadre/calcio/')); ?>">
      <span class="sport-card__number">02</span><h3>Calcio</h3><span class="sport-card__arrow">↗</span>
    </a>
    <a class="sport-card sport-card--ginnastica" href="<?php echo esc_url(home_url('/squadre/ginnastica-artistica/')); ?>">
      <span class="sport-card__number">03</span><h3>Ginnastica Artistica</h3><span class="sport-card__arrow">↗</span>
    </a>
    <a class="sport-card sport-card--atletica" href="<?php echo esc_url(home_url('/squadre/atletica/')); ?>">
      <span class="sport-card__number">04</span><h3>Atletica</h3><span class="sport-card__arrow">↗</span>
    </a>
    <a class="sport-card sport-card--avviamento" href="<?php echo esc_url(home_url('/squadre/avviamento-allo-sport/')); ?>">
      <span class="sport-card__number">05</span><h3>Avviamento allo Sport</h3><span class="sport-card__arrow">↗</span>
    </a>
  </div>
</section>

<section class="identity">
  <div class="identity__inner">
    <p class="eyebrow">POLISPORTIVA COLVERDE</p>
    <h2>Più di una società sportiva.</h2>
    <p>Nata nel 2014 dall’unione delle realtà sportive di Drezzo, Gironico e Parè, la Polisportiva Colverde mette al centro crescita, educazione, inclusione e appartenenza al territorio.</p>
    <a class="text-link" href="<?php echo esc_url(home_url('/la-societa-2/')); ?>">Scopri la nostra storia →</a>
  </div>
</section>

<section class="section facilities">
  <div class="section-head">
    <div>
      <p class="eyebrow eyebrow--green">I NOSTRI IMPIANTI</p>
      <h2>Casa nostra.</h2>
    </div>
    <a class="text-link text-link--dark" href="<?php echo esc_url(home_url('/dove-siamo/')); ?>">Vedi tutti gli impianti →</a>
  </div>
  <div class="facility-grid">
    <div class="facility-card facility-card--fumagalli"><span>Centro Sportivo Fumagalli</span><small>Gironico</small></div>
    <div class="facility-card facility-card--drezzo"><span>Campo Sportivo</span><small>Drezzo</small></div>
    <div class="facility-card facility-card--palaverde"><span>PalaVerde</span><small>Gironico</small></div>
  </div>
</section>

<section class="news-strip">
  <div class="section">
    <div class="section-head">
      <div>
        <p class="eyebrow eyebrow--green">DAL MONDO COLVERDE</p>
        <h2>Ultime notizie.</h2>
      </div>
      <a class="text-link text-link--dark" href="<?php echo esc_url(home_url('/eventi/')); ?>">Tutti gli eventi →</a>
    </div>
    <div class="news-grid">
      <?php
      $colverde_news = new WP_Query(['posts_per_page' => 3, 'post_status' => 'publish']);
      if ($colverde_news->have_posts()) :
        while ($colverde_news->have_posts()) : $colverde_news->the_post(); ?>
          <article class="news-card">
            <a href="<?php the_permalink(); ?>">
              <div class="news-card__image">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
              </div>
              <time><?php echo esc_html(get_the_date('d.m.Y')); ?></time>
              <h3><?php the_title(); ?></h3>
            </a>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</section>

<section class="join">
  <div class="join__inner">
    <p class="eyebrow">VIVI COLVERDE</p>
    <h2>Lo sport comincia qui.</h2>
    <a class="btn btn--primary" href="<?php echo esc_url(home_url('/contatti/')); ?>">Contattaci</a>
  </div>
</section>

<?php get_footer(); ?>
