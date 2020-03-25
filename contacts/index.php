<?php
  require '../php/language.php';
  require '../php/menu.php';
  require '../php/contacts.php';

  $menu = $menu[$language['code']];
  $contacts = $contacts[$language['code']];
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $menu['contacts']['title']; ?> — Syndicate Studio</title>
    <link href="/css/bootstrap-4.4.1/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/marquee.css" rel="stylesheet">
  </head>

  <body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md align-items-start mt-2 mx-2">
      <a class="navbar-brand p-0 mx-3 mb-0" href="/"><img src="/img/syndicate-logo.png" alt="Syndicate Logo"></a>
      <button class="navbar-toggler mx-3 my-2 p-0" type="button" data-toggle="collapse" data-target=".collapsible-item">
        <div class="line"></div><div class="line"></div><div class="line"></div>
      </button>
      <div class="navbar-collapse collapse collapsible-item">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['works']['link']; ?>"><?php echo $menu['works']['title']; ?></a></li>
          <li class="nav-item ml-auto"><span class="navbar-text text-nowrap mx-3 my-2 p-0"><?php echo $menu['contacts']['title']; ?></span></li>
          <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['about']['link']; ?>"><?php echo $menu['about']['title']; ?></a></li>
          <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0 nav-language-switcher" href="<?php echo $language['switcherUrl']; ?>"><?php echo $language['switcherLabel']; ?></a></li>
        </ul>
      </div>
    </nav>

    <h1 class="page-title"><?php echo $menu['contacts']['title']; ?></h1>

    <div class="contacts flex-grow-1">
<?php
  echo $contacts['realWorld'];
  foreach ($contacts['socialLinks'] as $socialLink) {
    echo '<a href="' . $socialLink['url'] . '"><img src="' . $socialLink['icon'] . '" alt="' . $socialLink['altText'] . '"></a>' . "\n";
  }
?>
    </div>

    <footer id="marquee">
      <span><span class="contacts-motto"><?php echo $contacts['motto']; ?></span></span>
    </footer>

    <script src="/js/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap-4.4.1/bootstrap.bundle.min.js"></script>
    <script src="/js/marquee.js"></script>
  </body>
</html>
