<?php

$languageData = require_once "../data/language.php";
$menu = require_once "../data/menu.php";
$works = require_once "../data/works.php";
$copyright = require_once "../data/works.php";

$languageCode = $languageData['code'];

preg_match("/^.+\/(.+)$/", $_SERVER['REQUEST_URI'], $matches);

$workId = $matches[1];
$work = $works[$workId - 1];

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $work[1][$languageCode]['pageTitle'] . ' — Syndicate Studio'; ?></title>

    <link rel="stylesheet" href="/dist/bundle/main.css"/>
    <link rel="stylesheet" href="/dist/bundle/marquee.css"/>
    <link rel="stylesheet" href="/dist/bundle/works.css"/>
    <link rel="preload" href="/dist/bundle/main.js" as="script"/>
    <link rel="preload" href="/dist/bundle/work.js" as="script"/>
    <link rel="preload" href="/dist/bundle/marquee.js" as="script"/>

</head>

<body class="body work-page">
<div class="black-back"></div>

<?php
$languageSwitcherLabel = $languageData['switcherLabel'];
$languageSwitcherUrl = $languageData['switcherUrl'];
?>

<nav class="navbar navbar-expand-md fixed-top align-items-start mt-2 mx-2 justify-content-between">
    <div class="mx-3 m-0">
        <a class="navbar-brand p-0 mx-0 mb-0" href="/"><img src="/assets/img/syndicate-logo.png"
                                                            alt="Syndicate Logo"></a>
    </div>
    <div class="navbar-text text-center flex-column mx-3 my-2 p-0"><?php echo $work[1][$languageCode]['navbarTitle']; ?></div>
    <div class="navbar-toggler mx-3 my-2 p-0" data-toggle="collapse" data-target=".collapsible-item">
        <div class="navbar-toggler__line"></div>
    </div>
    <ul class="navbar-nav navbar-collapse collapsible-item collapse justify-content-end flex-grow-0">
        <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                href="<?php echo $menu[$languageCode]['works']['link']; ?>">
                <?php echo $menu[$languageCode]['works']['title']; ?></a>
        </li>
        <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                href="<?php echo $menu[$languageCode]['contacts']['link']; ?>">
                <?php echo $menu[$languageCode]['contacts']['title']; ?></a>
        </li>
        <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                href="<?php echo $menu[$languageCode]['about']['link']; ?>">
                <?php echo $menu[$languageCode]['about']['title']; ?></a>
        </li>
        <!--<li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0 nav-language-switcher"
                                href="<?php /*echo $languageSwitcherUrl; */ ?>">
                <?php /*echo $languageSwitcherLabel; */ ?></a>
        </li>-->
    </ul>
</nav>

<div class="work single">

    <video id="work-player" poster="<?php echo $work[1][$languageCode]['posterImage']; ?>"
           muted loop autoplay preload="metadata" class="work__video" playsinline>
        <?php
        foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
            echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
        }
        ?>
    </video>

    <h1 class="work-title"><?php echo $work[1][$languageCode]['pageTitle']; ?></h1>

    <div class="work-title work-title_sub"><?php echo $work[1][$languageCode]['title']; ?></div>

    <p class="work-description"><?php echo $work[1][$languageCode]['description']; ?></p>
</div>

<footer class="footer sticky-bottom">
    <div id="marquee" class="marquee">
        <?php
        foreach ($work[1][$languageCode]['hashTags'] as $hashtag) {
            echo '<span><a class="work-hashtag-link" href="' . $hashtag['url'] . '">' . $hashtag['tag'] . '</a></span>';
        }
        ?>
    </div>
</footer>

<script src="/dist/bundle/main.js"></script>
<script src="/dist/bundle/work.js"></script>
<script src="/dist/bundle/marquee.js"></script>
</body>

</html>