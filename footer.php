</main>

<footer class="site-footer">
  <div class="site-footer__inner site-footer__inner--rich">
    <div>
      <strong>Polisportiva Colverde A.S.D.</strong>
      <span>Sport, territorio, comunità.</span>
    </div>
    <nav class="footer-links" aria-label="Link legali">
      <a href="<?php echo esc_url(home_url('/documenti/')); ?>">Documenti</a>
      <a href="<?php echo esc_url(home_url('/privacy-cookie/')); ?>">Privacy & Cookie</a>
      <a href="<?php echo esc_url(home_url('/safeguarding/')); ?>">Safeguarding</a>
    </nav>
  </div>
</footer>

<div class="cookie-banner" id="colverde-cookie-banner" hidden>
  <div class="cookie-banner__copy">
    <strong>Privacy e cookie</strong>
    <p>Utilizziamo cookie tecnici necessari al funzionamento del sito. Eventuali cookie non necessari vengono utilizzati solo con il tuo consenso.</p>
  </div>
  <div class="cookie-banner__actions">
    <a href="<?php echo esc_url(home_url('/privacy-cookie/')); ?>">Informativa</a>
    <button type="button" data-cookie-choice="necessary">Solo necessari</button>
    <button type="button" class="cookie-accept" data-cookie-choice="all">Accetta</button>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
