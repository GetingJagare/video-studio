<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div class="d-flex flex-column min-vh-100">

    <?php
    $languageCode = Application::$app->config['language']['code'];
    $languageSwitcherLabel = Application::$app->config['language']['switcherLabel'];
    $languageSwitcherUrl = Application::$app->config['language']['switcherUrl'];
    ?>

    <nav class="navbar navbar-expand-md align-items-start mt-2 mx-2">
        <a class="navbar-brand p-0 mx-3 mb-0" href="/"><img src="/assets/img/syndicate-logo.png" alt="Syndicate Logo"></a>
        <button class="navbar-toggler mx-3 my-2 p-0" type="button" data-toggle="collapse" data-target=".collapsible-item">
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
                                    href="<?php /*echo $languageSwitcherUrl; */?>">
                    <?php /*echo $languageSwitcherLabel; */?></a>
            </li>-->
            </ul>
        </div>
    </nav>

    <h1 class="page-title"><?php echo Application::$app->config['menu'][$languageCode]['about']['title']; ?></h1>

    <div class="container-fluid flex-grow-1">
        <div class="about__row">
            <div class="about__col">
                <?php echo Application::$app->config['about'][$languageCode]['text1']; ?>
            </div>
            <div class="about__col">
                <?php echo Application::$app->config['about'][$languageCode]['text2']; ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div id="marquee" class="marquee">
            <?php
            foreach (Application::$app->config['about'][$languageCode]['clientLogos'] as $clientLogo) {
                echo '<img src="' . $clientLogo . '" class="marquee__logo">';
            }
            ?>
        </div>
    </footer>

    <?php echo Application::$app->assetManager->js; ?>

</div>