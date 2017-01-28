<header class="header header-events-detail">
  <nav class="header-nav">
    <a href="index.php" class="header-nav-logo"><span class="header-nav-logo-hidden">DOK</span></a>
    <div class="header-nav-items">
      <a href="index.php?page=event" class="header-nav-item header-nav-item-selected header-nav-item-agenda">Agenda</a>
      <a href="index.php?page=practical" class="header-nav-item header-nav-item-practical">Praktisch</a>
      <a href="index.php?page=about" class="header-nav-item header-nav-item-about">Over DOK</a>
    </div>
    <div class="header-nav-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank">
      </a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank">
      </a>
    </div>
  </nav>
  <div class="header-events-detail-breadcrumb">
    <h1 class="header-events-detail-goback"><a href="index.php?page=event">Terug naar agenda </a></h1>
</header>

<main>
  <section class="event-detail-header">
    <article class="event-detail-header-artist">
      <img class="event-detail-header-artist-img"
      src="../assets/img/event/<?php echo $event["img"]; ?>.jpg"
      srcset="../assets/img/event/<?php echo $event["img"]; ?>.jpg 800w,
              assets/img/default.gif 1w"
      height="438" width="600"
      sizes="(min-width: 590px) 35vw,
        1vw"
       alt="blog-image">
      <div class="event-detail-header-artist-title">
        <h1><?php echo $event["title"];?></h1>
        <h2><?php echo $event["start"];?></h2>
      </div>
    </article>
  </section>

  <section class="event-detail-icons">
    <!-- <p><?php var_dump($event);?></p> -->
    <p class="event-detail-icons-organiser"> <?php echo $event['organiser_id'];?></p>
    <p class="event-detail-icons-place"><?php echo $event['name'];?></p>
    <p class="event-detail-icons-time"><pre><?php echo $event['start'];?> </pre> </p>
    <p class="event-detail-icons-tag"><?php echo $event['tag'];?></p>
  </section>
  <section class="event-detail-info">

  </section>
  <section class="event-detail-related">

  </section>
</main>
