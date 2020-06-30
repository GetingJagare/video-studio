<?php

$languageCode = Application::$app->config['language']['code'];
$worksToShow = 5;

?>

<div class="main">

    <div class="showreel">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" preload="metadata"
               class="showreel__video">
            <?php
            foreach (Application::$app->config['showreel'][$languageCode]['videoFiles'] as $videoFile) {
                preg_match("/(.+)([^\/])+$/", $videoFile['src'], $matches);
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            ?>
        </video>
        <img class="syndicate-logo img-fluid"
             src="<?php echo Application::$app->config['showreel'][$languageCode]['logoImage']; ?>"
             alt="Syndicate Logo">
        <div class="syndicate-logline"><?php echo Application::$app->config['showreel'][$languageCode]['description']; ?></div>
        <div class="chevron"></div>
    </div>

    <div class="under-showreel">

        <?php
        $languageCode = Application::$app->config['language']['code'];
        $languageSwitcherLabel = Application::$app->config['language']['switcherLabel'];
        $languageSwitcherUrl = Application::$app->config['language']['switcherUrl'];
        ?>

        <nav class="navbar navbar-expand-md align-items-start mt-2 mx-2">
            <a class="navbar-brand p-0 mx-3 mb-0" href="/"><img src="/assets/img/syndicate-logo.png"
                                                                alt="Syndicate Logo"></a>
            <button class="navbar-toggler mx-3 my-2 p-0" type="button" data-toggle="collapse"
                    data-target=".collapsible-item">
                <div class="navbar-toggler__line"></div>
            </button>
            <div class="navbar-collapse collapse collapsible-item">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                            href="<?php echo Application::$app->config['menu'][$languageCode]['works']['link']; ?>">
                            <?php echo Application::$app->config['menu'][$languageCode]['works']['title']; ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                            href="<?php echo Application::$app->config['menu'][$languageCode]['contacts']['link']; ?>">
                            <?php echo Application::$app->config['menu'][$languageCode]['contacts']['title']; ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0"
                                            href="<?php echo Application::$app->config['menu'][$languageCode]['about']['link']; ?>">
                            <?php echo Application::$app->config['menu'][$languageCode]['about']['title']; ?></a>
                    </li>
                    <!--<li class="nav-item"><a class="nav-link text-nowrap text-right mx-3 my-2 p-0 nav-language-switcher"
                                    href="<?php /*echo $languageSwitcherUrl; */ ?>">
                    <?php /*echo $languageSwitcherLabel; */ ?></a>
            </li>-->
                </ul>
            </div>
        </nav>

        <div class="works">

            <?php
            foreach (Application::$app->config['works'] as $i => $work) {

                echo '<a href="' . $work[1][$languageCode]['url'] . '" class="work">';

                echo '<video id="playerwork-' . ($i + 1) . '-player" ' .
                    'poster="' . $work[1][$languageCode]['posterImage'] .
                    '" class="work__video" muted loop preload="metadata">';
                foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                    echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
                }
                echo '</video>';
                echo '<div class="work-info">' .
                    $work[1][$languageCode]['posterDescription'] .
                    '</div>';
                echo '<div class="work-name work-name_' . ($i % 2 == 0 ? 'even' : 'odd') . '">' .
                    $work[1][$languageCode]['navbarTitle'] . '</div>';
                echo '</a>';
            }
            ?>

        </div>

        <?php
        $languageCode = Application::$app->config['language']['code'];
        $copyright = Application::$app->config['copyright'][$languageCode];
        ?>

        <footer class="footer sticky-bottom">
            <p class="text-center text-white copyright"><?php echo $copyright; ?></p>
        </footer>
    </div>

    <?php echo Application::$app->assetManager->js; ?>

</div>