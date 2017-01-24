<header class="header header-events">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-active">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item">Praktisch</a>
      <a href="index.php?page=about" class="header-nav-item">Over DOK</a>
    </div>
    <div class="header-nav-social">
      <a href="#" class="header-nav-social-facebook"></a>
      <a href="#" class="header-nav-social-twitter"></a>
    </div>
  </nav>
  <div class="header-events-title">
    <h1 class="header-events-title-h">Agenda</h1>
    <p class="header-events-title-p">Luie zondag, zin om te creëren, genieten van goede <br/> muziek misschien? Ontdek hier de evenementen die jou energie <br/> zullen geven op deze zonnige zomerdagen.</p>
  </div>
</header>

<main>
  <section class="events-search">
    <form class="events-search-form-search" action="index.php?page=event" method="post">
      <input type="text" id="search" name="query" placeholder="Zoeken" value="" autocomplete="on"><br/>
      <input type="hidden" name="page" value="event">
      <input type="submit" name="action" value="Zoek">
    </form>
    <form class="events-search-form-tag" action="index.php?page=event" method="post">
      <select class="events-search-form-tag-select" name="Soort evenement">
        <option value='selected'>Soort evenement</option>
        <option value='1 juli'>Circus</option>
        <option value='2 juli'>Iets</option>
        <option value='3 juli'>Feest</option>
      </select>
    </form>

    <form class="events-search-form-month" action="index.php?page=event" method="post">
      <select class="events-search-form-month-select" name="Wanneer">
        <option value='selected'>Wanneer</option>
        <option value='Mei'>Mei</option>
        <option value='Juni'>Juni</option>
        <option value='Juli'>Juli</option>
        <option value='Augustus'>Augustus</option>
        <option value='September'>September</option>
      </select>
    </form>
  </section>
  <!-- <section>
    <h1>Events</h1>
    <?php foreach($events as $event): ?>
      <article>
        <header><h2><?php echo $event['title']; ?></h2></header>
        <dl>
          <dt>start</dt><dd><?php echo $event['start'];?></dd>
          <dt>end</dt><dd><?php echo $event['end'];?></dd>
          <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
          <dt>title</dt><dd><?php echo $event['title'];?></dd>
          <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
          <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
          <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
        </dl>
      </article>
    <? endforeach;?>
  </section> -->

  <section class="events-result">
    <?php foreach($events as $event): ?>
      <h1><?php echo $event['title']; ?></h1>
    <? endforeach;?>
  </section>
</main>
