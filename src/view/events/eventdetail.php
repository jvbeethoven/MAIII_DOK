<header class="header header-events-detail">
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
  <div class="header-events-detail-breadcrumb">
    <a href="index.php?page=event" class="header-events-detail-goback">Terug naar agenda </a>
  </div>
</header>

<main>
  <section class="event-detail-header">
    <article class="event-detail-header-artist">
      <img class="event-detail-header-artist-img"
      src="assets/img/event/<?php echo $event["img"];?>.jpg"
      srcset="assets/img/event/<?php echo $event["img"];?>.jpg 500w,
              assets/img/event/<?php echo $event["img"];?>@50x.jpg 250w"
      height="474" width="480"
      sizes="(min-width: 1160px) 35vw,
            50vw"
       alt="blog-image">
      <div class="event-detail-header-artist-title">
        <h1 class="event-detail-header-artist-title-h1"><?php echo $event["title"];?></h1>
        <h2 class="event-detail-header-artist-title-h2">
          <?php
          $dt = new DateTime($event['start']);
          $date = $dt->format('d.m.Y');
          echo $date;?></h2>
      </div>
    </article>
  </section>

  <section class="event-detail-icons">
    <!-- <p><?php var_dump($event);?></p> -->
    <div class="event-detail-icons-container">
      <?php if($event['organiser_id']): ?>
        <p class="event-detail-icons-organiser"> Organisator <?php echo $event['organiser_id'];?></p>
      <?php endif ?>

      <?php if($event['name']): ?>
      <p class="event-detail-icons-place"><?php echo $event['name'];?></p>
      <?php endif ?>

      <?php if($event['start']): ?>
      <p class="event-detail-icons-time">
              <?php
              $dt = new DateTime($event['start']);
              $time = $dt->format('H:i');
              echo $time;?>
              -
              <?php
              $dt = new DateTime($event['end']);
              $time = $dt->format('H:i');
              echo $time;?>
            </p>
      <?php endif ?>

      <?php if($event['tag']): ?>
        <p class="event-detail-icons-tag"><?php echo $event['tag'];?></p>
      <?php endif ?>
    </div>
  </section>

  <section class="event-detail-information">
    <div class="event-detail-info">
      <?php echo $event["description"]; ?>
    </div>
    <div class="event-detail-buttons">
      <?php if($event['facebook'] || $event['youtube'] || $event['tickets']): ?>
      <p class="event-detail-buttons-title">Ontdek het event:</p>
      <?php endif ?>

      <?php if($event['tickets']): ?>
        <a href="<?php echo $event['tickets'];?>" class="event-detail-buttons-tickets" target="_blank">Tickets</a>
      <?php endif ?>

      <div class="event-detail-buttons-social">
        <?php if($event['facebook']): ?>
          <a href="<?php echo $event['facebook'];?>" class="event-detail-buttons-social-facebook" target="_blank">Facebook</a>
        <?php endif ?>
        <?php if($event['youtube']): ?>
          <a href="<?php echo $event['youtube'];?>" class="event-detail-buttons-social-youtube" target="_blank">YouTube</a>
        <?php endif ?>
      </div>
    </div>
  </section>
  <br>
  <section class="event-detail-related">

  </section>
