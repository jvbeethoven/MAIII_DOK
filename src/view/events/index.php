<header class="header header-events">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-selected header-nav-item-agenda">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item header-nav-item-practical">Praktisch</a>
      <a href="index.php?page=about" class="header-nav-item header-nav-item-about">Over DOK</a>
    </div>
    <div class="header-nav-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank"></a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank"></a>
    </div>
  </nav>
  <div class="header-events-title">
    <h1 class="header-events-title-h">Agenda</h1>
    <p class="header-events-title-p">Luie zondag, zin om te creëren, genieten van goede muziek misschien? Ontdek hier de evenementen die jou energie zullen geven op deze zonnige zomerdagen.</p>
  </div>
</header>

<main>
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
        <option value='' disabled selected>Wanneer</option>
        <option value="Mei" data-start="2017-05-01 00:00:00" data-end="2017-05-31 23:59:59">Mei</option>
        <option value='Juni'>Juni</option>
        <option value='Juli'>Juli</option>
        <option value='Augustus'>Augustus</option>
        <option value='September'>September</option>
      </select>
      <input type="submit" name="action" value="zoek">
    </form>

  </section>
  <!-- <section>
    <h1>Events</h1>
    <?php foreach($events as $event): ?>
      <article>
        <header><h2><?php echo $event['title']; ?></h2></header>
        <dl>
          <dt>title</dt><dd><?php echo $event['title'];?></dd>
          <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
        </dl>
      </article>
    <? endforeach;?>
  </section> -->

  <section class="events-result">
    <?php if (!$events) {
      echo "<p> Dat event kennen we niet. Probeer anders onze andere zoekfunctie's om het te vinden. </p>";
    } ?>
      <?php foreach($events as $event): ?>
        <article class="events-result-item">
          <a href="index.php?page=eventdetail&amp;id=<?php echo $event["id"]; ?>" class="events-result-item-link">
            <img class="events-result-item-img"
            src="../assets/img/event/<?php echo $event["img"]; ?>.jpg"
            srcset="../assets/img/event/<?php echo $event["img"]; ?>.jpg 800w,
                    assets/img/default.gif 1w"
            height="474" width="480"
            sizes="(min-width: 590px) 35vw,
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
      <? endforeach;?>
  </section>
</main>
