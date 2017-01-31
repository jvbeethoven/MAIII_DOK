<header class="header header-events">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-selected header-nav-item-agenda">Agenda</a>
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
      <input type="submit" name="action" value="zoek">
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
      <input type="submit" name="action" value="zoek">
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
