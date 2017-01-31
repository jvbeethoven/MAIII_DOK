<header class="header">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-selected header-nav-item-agenda">Agenda</a>
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
  <section class="header-events-title">
    <h1 class="header-events-title-h">Agenda</h1>
    <p class="header-events-title-p">Luie zondag, zin om te creëren, genieten van goede muziek misschien? Ontdek hier de evenementen die jou energie zullen geven op deze zonnige zomerdagen.</p>
  </section>

  <section class="events-search">

    <form class="events-search-form-search" action="index.php?page=event" method="get">
      <input type="text" class="events-search-form-input" name="query" placeholder="Zoeken" value="" autocomplete="off"><br/>
      <input type="hidden" name="page" value="event">
      <input type="submit" name="action" value="Zoek" class="events-search-form-submit">
    </form>

    <form class="events-search-form-tag" action="index.php" method="get">
      <select class="events-search-form-tag-select" name="tag">
        <option value='' disabled selected>Soort evenement</option>
        <?php foreach($tags as $tag): ?>
        <option value='<?php echo $tag['tag'];?>'><?php echo $tag['tag'];?></option>
        <? endforeach;?>
      </select>
      <input type="hidden" name="page" value="event">
      <input  class="submit" type="submit" name="action" value="zoek">
    </form>

    <form class="events-search-form-month" action="index.php?page=event" method="get">
      <select class="events-search-form-month-select" name="month">
        <option value='01' disabled selected>Wanneer</option>
        <option value="05">Mei</option>
        <option value='06'>Juni</option>
        <option value='07'>Juli</option>
        <option value='08'>Augustus</option>
        <option value='09'>September</option>
      </select>
      <input type="hidden" name="page" value="event">
      <input  class="submit" type="submit" name="action" value="zoek">
    </form>

  </section>

  <section class="events-result">
    <?php if (!$events): ?>
      <p class="error"> Nah, da's niks voor DOK. Zoek anders iets leuks via onze zoekfunctie's. </p>
      <?php endif ?>
      <?php foreach($events as $event): ?>
        <article class="events-result-item">
          <a href="index.php?page=eventdetail&amp;id=<?php echo $event["id"]; ?>" class="events-result-item-link">
            <img class="events-result-item-img"
            src="assets/img/event/<?php echo $event["img"];?>.jpg"
            srcset="assets/img/event/<?php echo $event["img"];?>.jpg 500w,
                    assets/img/event/<?php echo $event["img"];?>@50x.jpg 250w,
                    assets/img/default.gif 7w"
            height="474" width="480"
            sizes="(min-width: 590px) 35vw,
              (min-width: 1160px) 50vw,
              1vw"
             alt="blog-image">
            <div class="events-result-item-info">
              <h1 class="events-result-item-info-title"><?php echo $event["title"]; ?></h1>
              <div class="events-result-item-info-details">
                <p class="events-result-item-info-details-date">
                  <?php
                  $dt = new DateTime($event['start']);
                  $date = $dt->format('d/m/Y');
                  echo $date;
                  ?></p>
                <p class="events-result-item-info-details-place"><?php foreach($event['locations'] as $location): ?><?php echo $location['name'];?><?php endforeach;?></p>
              </div>
            </div>
          </a>
        </article>
      <?php endforeach;?>
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
