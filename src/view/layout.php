<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="DOK – werfplek voor verpozing en creatieve manoeuvres"/>
    <meta name="author" content="DOK Gent"/>
    <meta name="keywords" content="DOK, Gent, dokken, creativiteit, humor, zomer, hipsters, kinderen, DIY, concert, tentoonstelling, gezellig"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/icon.jpg">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>


  <footer class="footer">
    <img src="assets/svg/dok_logo.svg" class="footer-logo" alt="DOK LOGO">
    <div class="footer-social">
      <a href="https://www.twitter.com" class="header-nav-social-facebook" target="_blank"></a>
      <a href="https://www.facebook.com" class="header-nav-social-twitter" target="_blank"></a>
    </div>
  </footer>

    <?php echo $js;?>
  </body>
</html>
