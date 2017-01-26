<header class="header header-events">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-agenda">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item header-nav-item-practical">Praktisch</a>
      <a href="index.php?page=about" class="header-nav-item header-nav-item-about">Over DOK</a>
    </div>
    <div class="header-nav-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank">
        <svg version="1.1" class="header-nav-social-twitter-svg"
        	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
        	 x="0px" y="0px" viewBox="0 0 32 26" style="enable-background:new 0 0 32 26;" xml:space="preserve">
        <style type="text/css">
        	.st0{fill:#525FE8;}
        </style>
        <defs>
        </defs>
        <path class="st0" d="M32,3.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,0.8,24,0,22.2,0
        	c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,7.8,5.5,5.2,2.2,1.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5
        	c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1
        	c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,24.9,6.4,26,10.1,26c12.1,0,18.7-10,18.7-18.7
        	c0-0.3,0-0.6,0-0.8C30,5.6,31.1,4.4,32,3.1z"/>
        </svg>
      </a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank">
        <svg version="1.1" class="header-nav-social-facebook-svg"
        	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
        	 x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
        <style type="text/css">
        	.st0{fill:#525FE8;}
        </style>
        <path id="White_1_" class="st0" d="M30.7,0H1.3C0.6,0,0,0.6,0,1.3v29.3C0,31.4,0.6,32,1.3,32H17V20h-4v-5h4v-4
        	c0-4.1,2.6-6.2,6.3-6.2C25.1,4.8,26.6,5,27,5v4.3l-2.6,0c-2,0-2.5,1-2.5,2.4V15h5l-1,5h-4l0.1,12h8.6c0.7,0,1.3-0.6,1.3-1.3V1.3
        	C32,0.6,31.4,0,30.7,0z"/>
        </svg>
         
      </a>
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
    <?php if (!$events) {
      echo "<p> Dat event kennen we niet. Probeer anders onze andere zoekfunctie's om het te vinden. </p>";
    } ?>
    <?php foreach($events as $event): ?>
      <h1><?php echo $event['title']; ?></h1>
    <? endforeach;?>
  </section>
</main>
