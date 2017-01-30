<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>
    <section class="newsletter">
      <article class="newsletter-text">
        <h1 class="newsletter-text-title">Fan van DOK?</h1>
        <p class="newsletter-text-p">Laten we het officieel maken door je in te schrijven op de nieuwsbrief.</p>
      </article>
      <form action="index.php" method="post" class="newsletter-subscribe-form">
        <input type="email" name="email" class="newsletter-subscribe-input" placeholder="Email adres">
        <button type="submit" class="newsletter-subscribe-submit"></button>
      </form>
    </section>
    <section class="sponsors">
      <a href="https://www.vlaanderen.be/nl" class="sponsors-img sponsors-img-1" target="_blank"><img src="assets/img/sponsors/sponsor1.png" alt="logo sponsor"></a>
      <a href="https://stad.gent/" class="sponsors-img sponsors-img-2" target="_blank"><img src="assets/img/sponsors/sponsor2.png" alt="logo sponsor"></a>
      <a href="http://www.thuisindestad.be/" class="sponsors-img sponsors-img-3" target="_blank"><img src="assets/img/sponsors/sponsor3.png" alt="logo sponsor"></a>
      <a href="http://sogent.be/" class="sponsors-img sponsors-img-4" target="_blank"><img src="assets/img/sponsors/sponsor4.png" alt="logo sponsor"></a>
      <a href="https://www.cirq.be/" class="sponsors-img sponsors-img-5" target="_blank"><img src="assets/img/sponsors/sponsor5.png" alt="logo sponsor"></a>
      <a href="http://democrazy.be/" class="sponsors-img sponsors-img-6" target="_blank"><img src="assets/img/sponsors/sponsor6.png" alt="logo sponsor"></a>
      <a href="http://vedett.be/" class="sponsors-img sponsors-img-7" target="_blank"><img src="assets/img/sponsors/sponsor7.png" alt="logo sponsor"></a>
      <a href="http://www.pepsi.com/nl-be/d" class="sponsors-img sponsors-img-8" target="_blank"><img src="assets/img/sponsors/sponsor8.png" alt="logo sponsor"></a>
      <a href="http://www.bionade.de/" class="sponsors-img sponsors-img-9" target="_blank"><img src="assets/img/sponsors/sponsor9.png" alt="logo sponsor"></a>
      <a href="http://biofresh.be/index.php?id=54" class="sponsors-img sponsors-img-10" target="_blank"><img src="assets/img/sponsors/sponsor10.png" alt="logo sponsor"></a>
      <a href="#" class="sponsors-img sponsors-img-11" target="_blank"><img src="assets/img/sponsors/sponsor11.png" alt="logo sponsor"></a>

    </section>
  </main>

  <footer class="footer">
    <img src="assets/svg/dok_logo.svg" class="footer-logo" alt="DOK LOGO">
    <div class="footer-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank"></a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank"></a>
    </div>
  </footer>

    <?php echo $js;?>
  </body>
</html>
