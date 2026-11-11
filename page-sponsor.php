<?php
/**
 * Template Name: Sponsor
 * Description: Pagina sponsor della Polisportiva Colverde.
 */
if (!defined('ABSPATH')) exit;

get_header();

$colverde_sponsors = [
    [
        'name' => 'TIGROS',
        'logo' => 'https://www.tigros.it/logo/social.png',
        'website' => 'https://www.tigros.it/',
        'category' => 'Partner della Polisportiva',
        'description' => 'Nata a Varese nel 1979, TIGROS è una realtà della grande distribuzione presente in Lombardia e Piemonte. Qualità, freschezza e convenienza sono al centro della sua proposta, con attenzione alle esigenze quotidiane delle famiglie.',
        'thanks' => 'La Polisportiva Colverde ringrazia TIGROS per il sostegno alle proprie attività sportive e per la fiducia nel nostro progetto.',
    ],
];
?>

<section class="sponsor-hero" aria-labelledby="sponsor-page-title">
  <div class="sponsor-hero__inner">
    <p class="eyebrow">POLISPORTIVA COLVERDE · PARTNER</p>
    <h1 id="sponsor-page-title">I NOSTRI<br><span>SPONSOR.</span></h1>
    <p class="sponsor-hero__lead">Insieme a chi crede nel valore dello sport, dei giovani e del nostro territorio.</p>
  </div>
</section>

<section class="sponsor-showcase" aria-label="Aziende che sostengono la Polisportiva">
  <div class="sponsor-showcase__inner">
    <p class="eyebrow eyebrow--green">AL NOSTRO FIANCO</p>
    <h2>Le realtà che credono in noi.</h2>
    <div class="sponsor-grid">
      <?php foreach ($colverde_sponsors as $sponsor) : ?>
        <article class="sponsor-card">
          <div class="sponsor-card__brand">
            <a href="<?php echo esc_url($sponsor['website']); ?>" target="_blank" rel="noopener noreferrer sponsored" aria-label="<?php echo esc_attr('Visita il sito di ' . $sponsor['name']); ?>">
              <img src="<?php echo esc_url($sponsor['logo']); ?>"
                   alt="<?php echo esc_attr('Logo ' . $sponsor['name']); ?>"
                   loading="lazy"
                   decoding="async">
            </a>
          </div>
          <div class="sponsor-card__body">
            <p class="sponsor-card__category"><?php echo esc_html($sponsor['category']); ?></p>
            <h3><?php echo esc_html($sponsor['name']); ?></h3>
            <p><?php echo esc_html($sponsor['description']); ?></p>
            <p class="sponsor-card__thanks"><?php echo esc_html($sponsor['thanks']); ?></p>
            <a class="sponsor-card__link" href="<?php echo esc_url($sponsor['website']); ?>" target="_blank" rel="noopener noreferrer sponsored">
              Scopri <?php echo esc_html($sponsor['name']); ?> <span aria-hidden="true">↗</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sponsor-cta" aria-labelledby="sponsor-cta-title">
  <div class="sponsor-cta__inner">
    <p class="eyebrow">CRESCIAMO INSIEME</p>
    <h2 id="sponsor-cta-title">Sostieni lo sport.<br>Fai parte della nostra storia.</h2>
    <p>Collaborare con la Polisportiva Colverde significa contribuire alla crescita di un progetto sportivo radicato nel territorio.</p>
    <a class="btn btn--primary" href="<?php echo esc_url(home_url('/contatti/')); ?>">Diventa sponsor</a>
  </div>
</section>

<?php get_footer(); ?>
