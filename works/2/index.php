<?php
  require '../../php/language.php';
  require '../../php/menu.php';
  require '../../php/works.php';

  $menu = $menu[$language['code']];
  $work = reset(array_filter($works, "findWorkByUrl"))[1][$language['code']];
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $work['pageTitle']; ?> — Syndicate Studio</title>
    <link href="/css/bootstrap-4.4.1/bootstrap.min.css" rel="stylesheet">
    <link href="/css/plyr-3.5.10/plyr.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/marquee.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md fixed-top align-items-start mt-2 mx-2">
      <div class="mx-3 m-0 navbar-flex-1-section">
        <a class="navbar-brand p-0 mx-0 mb-0" href="/"><img src="/img/syndicate-logo.png" alt="Syndicate Logo"></a>
      </div>
      <div class="navbar-text text-center flex-column mx-3 my-2 p-0 navbar-flex-1-section"><?php echo $work['navbarTitle']; ?></div>
      <div class="navbar-toggler mx-3 my-2 p-0 navbar-flex-1-section">
        <button class="navbar-toggler float-right p-0 m-0" type="button" data-toggle="collapse" data-target=".collapsible-item">
          <div class="line"></div><div class="line"></div><div class="line"></div>
        </button>
      </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['works']['link']; ?>"><?php echo $menu['works']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['contacts']['link']; ?>"><?php echo $menu['contacts']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['about']['link']; ?>"><?php echo $menu['about']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0 nav-language-switcher" href="<?php echo $language['switcherUrl']; ?>"><?php echo $language['switcherLabel']; ?></a></li>
          </ul>
      <ul class="navbar-nav collapse collapsible-item w-100">
        <li class="nav-item"><a class="nav-link text-nowrap text-right px-0 mx-3" href="<?php echo $menu['works']['link']; ?>"><?php echo $menu['works']['title']; ?></a></li>
        <li class="nav-item"><a class="nav-link text-nowrap text-right px-0 mx-3" href="<?php echo $menu['contacts']['link']; ?>"><?php echo $menu['contacts']['title']; ?></a></li>
        <li class="nav-item"><a class="nav-link text-nowrap text-right px-0 mx-3" href="<?php echo $menu['about']['link']; ?>"><?php echo $menu['about']['title']; ?></a></li>
        <li class="nav-item"><a class="nav-link text-nowrap text-right px-0 mx-3 nav-language-switcher" href="<?php echo $language['switcherUrl']; ?>"><?php echo $language['switcherLabel']; ?></a></li>
      </ul>
    </nav>




     
    <div>
      <video id="work-player" poster="<?php echo $work['posterImage']; ?>">
<?php
  foreach ($work['videoFiles'] as $videoFile) {
    echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
  }
?>
      </video>
      <div class="unmute-button"></div>
    </div>

    <h1 class="work-title"><?php echo $work['title']; ?></h1>

    <p class="work-description"><?php echo $work['description']; ?></p>

    <footer class="footer sticky-bottom">
      <div id="marquee">
<?php
  foreach ($work['hashTags'] as $hashtag) {
    echo '<span><a class="work-hashtag-link" href="' . $hashtag['url'] . '">' . $hashtag['tag'] . '</a></span>' . "\n";
  }
?>
      </div>
    </footer>

    <script src="/js/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap-4.4.1/bootstrap.bundle.min.js"></script>
    <script src="/js/plyr-3.5.10/plyr.min.js"></script>
    <script src="/js/work.js"></script>
    <script src="/js/marquee.js"></script>
  </body>
</html>
