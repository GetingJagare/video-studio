<?php

$languageData = require_once "../data/language.php";
$menu = require_once "../data/menu.php";
$works = require_once "../data/works.php";
$copyright = require_once "../data/copyright.php";

$languageCode = $languageData['code'];

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $menu[$languageCode]['works']['title'] . ' — Syndicate Studio'; ?></title>

    <link rel="stylesheet" href="/dist/bundle/main.css"/>
    <link rel="stylesheet" href="/dist/bundle/works.css"/>
    <link rel="preload" href="/dist/bundle/works.js" as="script"/>
    <link rel="preload" href="/dist/bundle/main.js" as="script"/>

</head>

<body class="body works-page">
<div class="black-back"></div>

<div class="portfolio">

    <?php
    $languageSwitcherLabel = $languageData['switcherLabel'];
    $languageSwitcherUrl = $languageData['switcherUrl'];
    ?>

    <nav class="navbar navbar-expand-md align-items-start mt-2 mx-2">
        <a class="navbar-brand p-0 mx-3 mb-0" href="/"><img src="/assets/img/syndicate-logo.png" alt="Syndicate Logo"></a>
        <button class="navbar-toggler mx-3 my-2 p-0" type="button" data-toggle="collapse" data-target=".collapsible-item">
            <div class="navbar-toggler__line"></div>
        </button>
        <div class="navbar-collapse collapse collapsible-item">
            <ul class="navbar-nav ml-auto">
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
                                    href="<?php /*echo $languageSwitcherUrl; */?>">
                    <?php /*echo $languageSwitcherLabel; */?></a>
            </li>-->
            </ul>
        </div>
    </nav>

    <div class="works">
        <?php
        foreach ($works as $i => $work) {

            echo '<a href="' . $work[1][$languageCode]['url'] . '" class="work">';
            echo '<video id="playerwork-' . $i . '-player" ' .
                'poster="' . $work[1][$languageCode]['posterImage'] .
                '" class="work__video" muted loop playsinline preload="metadata">';

            foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            echo '</video>';

            echo '<div class="work-info">' . $work[1][$languageCode]['posterDescription'] . '</div>';
            echo '<div class="work-name work-name_' . ($i % 2 == 0 ? 'even' : 'odd') . '">' .
                $work[1][$languageCode]['navbarTitle'] . '</div>';
            echo '</a>';
        }
        ?>
    </div>

    <footer class="footer sticky-bottom">
        <p class="text-center text-white copyright"><?php echo $copyright[$languageCode]; ?></p>
    </footer>

    <script src="/dist/bundle/main.js"></script>
    <script src="/dist/bundle/works.js"></script>

</div>
</body>

</html>