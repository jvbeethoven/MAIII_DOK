<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container-fade">
      <div class="container">
        <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
        <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

        <?php echo $content; ?>
      </div>
    </div>
    <section class="newsletter">
      <article class="newsletter-text">
        <h1 class="newsletter-text-title">Fan van DOK?</h1>
        <p class="newsletter-text-p">Laten we het officieel maken door je in te schrijven op de nieuwsbrief.</p>
      </article>
      <form action="index.php" method="post" class="newsletter-subscribe-form">
        <input type="email" name="email" class="newsletter-subscribe-input" placeholder="Email address">
        <button type="submit" class="newsletter-subscribe-submit">Subscribe</button>
      </form>
    </section>
    <section class="sponsors">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
      <img src="#" alt="">
    </section>
  </main>

    <?php echo $js;?>
  </body>
</html>
