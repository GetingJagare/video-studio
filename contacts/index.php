<?php

$languageData = require_once "../data/language.php";
$menu = require_once "../data/menu.php";
$contacts = require_once "../data/contacts.php";

$languageCode = $languageData['code'];

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $menu[$languageCode]['contacts']['title'] . ' — Syndicate Studio'; ?></title>

    <link rel="stylesheet" href="/dist/bundle/main.css"/>
    <link rel="stylesheet" href="/dist/bundle/marquee.css"/>
    <link rel="preload" href="/dist/bundle/marquee.js" as="script"/>
    <link rel="preload" href="/dist/bundle/main.js" as="script"/>

</head>

<body class="body contacts-page">
<div class="black-back"></div>

<div class="d-flex flex-column min-vh-100 m-min-vh-75">

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

    <h1 class="page-title"><?php echo $menu[$languageCode]['contacts']['title']; ?></h1>

    <div class="contacts flex-grow-1">
        <?php
        echo $contacts[$languageCode]['realWorld'];
        foreach ($contacts[$languageCode]['socialLinks'] as $socialLink) {
            echo "<a href=\"" . $socialLink['url'] . "\" class=\"contacts__link\" target=\"_blank\">" .
                "<img src=\"" . $socialLink['icon'] . "\" alt=\"" . $socialLink['altText'] . "\" class=\"contacts__link-image\">" .
                "</a>";
        }
        ?>
    </div>

    <footer id="marquee" class="marquee">
    <span>
            <?php
            foreach ($contacts[$languageCode]['motto'] as $tag) {
                echo '<span><a class="work-hashtag-link" href="#">' . $tag . '</a></span>';
            }
            ?>
        </span>
    </footer>

    <script src="/dist/bundle/main.js"></script>
    <script src="/dist/bundle/marquee.js"></script>

</div>
</body>

</html>