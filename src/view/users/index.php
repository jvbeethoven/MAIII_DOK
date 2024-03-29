<header class="header">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-agenda">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item header-nav-item-practical">Praktisch</a>
      <a href="index.php?page=about" class="header-nav-item header-nav-item-about">Over</a>
    </div>
    <div class="header-nav-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank"></a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank"></a>
    </div>
  </nav>
</header>

<main>
  <section class="header-container">
    <div class="header-container-images">
      <div class="header-container-img1"></div>
      <div class="header-container-img2"></div>
      <div class="header-container-img3"></div>
      <h1 class="header-container-title"><span class="header-container-title-hidden">DOK17</span></h1>
      <div class="header-container-img4"></div>
    </div>
    <h2 class="header-container-date">01.05.17 - 25.09.17</h2>
    <h2 class="header-container-place">GENTSE DOKKEN</h2>
  </section>
  <section class="general">

    <article class="general-article-news general-article-news-one">
      <a href="#" class="general-article-news-link">
        <img class="general-article-news-img"
        src="assets/img/blog1.jpg"
        srcset="assets/img/blog1.jpg 420w,
                assets/img/default.gif 1w"
        height="280" width="420"
        sizes="(min-width: 590px) 35vw,
          1vw"
         alt="blog-image">
        <div class="general-article-news-title general-article-news-title-one ">
          <h1 class="general-article-news-tag">#nieuws</h1>
          <h2 class="general-article-news-title-item">DOK gaat door in 2017-2018!</h2>
        </div>
      </a>
    </article>

    <article class="general-article-news general-article-news-two">
      <a href="#" class="general-article-news-link">
        <img class="general-article-news-img"
        src="assets/img/blog2.jpg"
        srcset="assets/img/blog2.jpg 800w,
                assets/img/default.gif 1w"
        height="474" width="800"
        sizes="(min-width: 590px) 35vw,
          1vw"
         alt="blog-image">
        <div class="general-article-news-title general-article-news-title-two">
          <h1 class="general-article-news-tag">#nieuws</h1>
          <h2 class="general-article-news-title-item">DOKbewoners &amp; DOKwerkers.</h2>
        </div>
      </a>
    </article>

    <article class="general-article-news general-article-news-three">
      <a href="#" class="general-article-news-link">
        <img class="general-article-news-img general-article-news-three-img"
        src="assets/img/blog3.jpg"
        srcset="assets/img/blog3.jpg 420w,
                assets/img/default.gif 1w"
        height="480" width="420"
        sizes="(min-width: 590px) 35vw,
          1vw"
         alt="blog-image">
        <div class="general-article-news-title general-article-news-title-three">
          <h1 class="general-article-news-tag">#nieuws</h1>
          <h2 class="general-article-news-title-item">Een blik op DOK2016</h2>
        </div>
      </a>
    </article>

    <article class="general-article-dok">
      <h1 class="general-article-dok-title">DOK x 2017</h1>
      <p class="general-article-dok-p">1 mei 2017 x 25 september 2017, iedere zondag én feestdagen van 11u tot 22u.</p>
      <p class="general-article-dok-p general-article-dok-p-anchor">Soms open op andere dagen, mede mogelijk door onze DOKbewoners ;) (agenda!)</p>
      <p class="general-article-dok-p">koffie en een gazet in de kantine vanaf 11u, Cozy Cozy DJ’s &amp; een DOK(rommel)markt (vanaf 31/07) met lekkere kraampjes!</p>
    </article>

    <article class="general-article-agenda">
      <h1 class="general-article-agenda-title">Deze week</h1>
      <?php foreach($upcomingEvents as $upcomingEvent): ?>
        <div class="general-article-agenda-event">
          <a href="index.php?page=eventdetail&amp;id=<?php echo $upcomingEvent["id"]; ?>" class="general-article-agenda-event-title"><?php echo $upcomingEvent['title']; ?></a>
          <p class="general-article-agenda-event-date">
            <?php
            $dt = new DateTime($upcomingEvent['start']);
            $date = $dt->format('d.m.Y');
            echo $date;
            ?>
          </p>
        </div>
      <? endforeach;?>
      <a href="#" class="general-article-agenda-link">Volledige Agenda</a>
    </article>

  </section>

  <section class="resident">
    <blockquote cite="#" class="resident-quote">
      <p class="resident-quote-text">“Dok gaf me als resident de kans om m’n creatieve grenzen te verleggen en dit te delen met andere inspirerende individuen.”</p>
      <p class="resident-quote-person">- Jan, DOKbewoner 2016</p>
    </blockquote>
    <a href="#" class="resident-quote-button">Word zelf resident</a>
  </section>
  <section class="map">
    <div class="map-img"></div>
    <a href="#" class="map-link">Ontdek de dokken!</a>
  </section>

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
