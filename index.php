<?php
  require 'php/language.php';
  require 'php/showreel.php';
  require 'php/menu.php';
  require 'php/works.php';
  require 'php/copyright.php';

  $showreel = $showreel[$language['code']];
  $menu = $menu[$language['code']];
  $copyright = $copyright[$language['code']];
  $worksToShow = 9;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syndicate Studio</title>
    <link href="/css/bootstrap-4.4.1/bootstrap.min.css" rel="stylesheet">
    <link href="/css/plyr-3.5.10/plyr.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/showreel.css" rel="stylesheet">
    <link href="/css/works.css" rel="stylesheet">
  </head>

  <body>

    <div class="showreel">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
<?php
  foreach ($showreel['videoFiles'] as $videoFile) {
    echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
  }
?>
      </video>
      <img class="syndicate-logo img-fluid" src="<?php echo $showreel['logoImage']; ?>" alt="Syndicate Logo">
      <div class="syndicate-logline"><?php echo $showreel['description']; ?></div>
      <div class="chevron"></div>
    </div>

    <div class="under-showreel">
      <nav class="navbar navbar-expand-md align-items-start mt-2 mx-2">
        <a class="navbar-brand p-0 mx-3 mb-0" href="/"><img src="/img/syndicate-logo.png" alt="Syndicate Logo"></a>
        <button class="navbar-toggler mx-3 my-2 p-0" type="button" data-toggle="collapse" data-target=".collapsible-item">
          <div class="line"></div><div class="line"></div><div class="line"></div>
        </button>
        <div class="navbar-collapse collapse collapsible-item">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['works']['link']; ?>"><?php echo $menu['works']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['contacts']['link']; ?>"><?php echo $menu['contacts']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0" href="<?php echo $menu['about']['link']; ?>"><?php echo $menu['about']['title']; ?></a></li>
            <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0 nav-language-switcher" href="<?php echo $language['switcherUrl']; ?>"><?php echo $language['switcherLabel']; ?></a></li>
          </ul>
        </div>
      </nav>

      <div class="works">
<?php
  for ($i = 0; $i < $worksToShow; $i++) {
    echo '<a href="' . $works[$i][1][$language['code']]['url'] . '">' . "\n";
    echo '<video id="playerwork-' . ($i + 1) . '-player" poster="' . $works[$i][1][$language['code']]['posterImage'] . '">' . "\n";
    foreach ($works[$i][1][$language['code']]['videoFiles'] as $videoFile) {
      echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
    }
    echo '</video>' . "\n";
    echo '<div class="work-info">' . $works[$i][1][$language['code']]['posterDescription'] . '</div>' . "\n";
    echo '<div class="work-name">' . $works[$i][1][$language['code']]['navbarTitle'] . '</div>' . "\n";
    echo '</a>' . "\n\n";
  }
?>
      </div>

      <footer class="footer sticky-bottom">
        <p class="text-center text-white copyright"><?php echo $copyright; ?></p>
      </footer>
    </div>

    <script src="/js/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap-4.4.1/bootstrap.bundle.min.js"></script>
    <script src="/js/plyr-3.5.10/plyr.min.js"></script>
    <script src="/js/showreel.js"></script>
    <script src="/js/works.js"></script>
  </body>
</html>
