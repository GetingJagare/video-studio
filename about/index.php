<?php

$languageData = require_once "../data/language.php";
$menu = require_once "../data/menu.php";
$about = require_once "../data/about.php";

$languageCode = $languageData['code'];

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $menu[$languageCode]['about']['title'] . ' — Syndicate Studio'; ?></title>

    <link rel="stylesheet" href="/dist/bundle/main.css"/>
    <link rel="stylesheet" href="/dist/bundle/marquee.css"/>
    <link rel="preload" href="/dist/bundle/marquee.js" as="script"/>
    <link rel="preload" href="/dist/bundle/main.js" as="script"/>

</head>

<body class="body about-page">
<div class="black-back"></div>

<div class="d-flex flex-column min-vh-100">

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

    <h1 class="page-title"><?php echo $menu[$languageCode]['about']['title']; ?></h1>

    <div class="container-fluid flex-grow-1">
        <div class="about__row">
            <div class="about__col">
                <?php echo $about[$languageCode]['text1']; ?>
            </div>
            <div class="about__col">
                <?php echo $about[$languageCode]['text2']; ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div id="marquee" class="marquee">
            <?php
            foreach ($about[$languageCode]['clientLogos'] as $clientLogo) {
                echo '<img src="' . $clientLogo . '" class="marquee__logo">';
            }
            ?>
        </div>
    </footer>

    <script src="/dist/bundle/main.js"></script>
    <script src="/dist/bundle/marquee.js"></script>

</div>
</body>

</html>