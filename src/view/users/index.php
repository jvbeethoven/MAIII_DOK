<header class="header">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-agenda">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item header-nav-item-practical">Praktisch</a>
      <div class="header-nav-dropdown">
        <a href="index.php?page=about" class="header-nav-item header-nav-item-about">Over</a>
        <ul class="header-nav-dropdown-content">
          <li><a href="index.php">Bewoners</a></li>
          <li><a href="index.php">Keuken</a></li>
          <li><a href="index.php">Sport</a></li>
          <li><a href="index.php">Tank</a></li>
          <li><a href="index.php">Blog</a></li>
        </ul>
      </div>
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
  <section class="map"></section>
