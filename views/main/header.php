<?php
    $languageCode = Application::$app->config['language']['code'];
    $languageSwitcherLabel = Application::$app->config['language']['switcherLabel'];
    $languageSwitcherUrl = Application::$app->config['language']['switcherUrl'];
?>

<nav class="navbar navbar-expand-md align-items-center mt-2 mx-2">
    <a class="navbar-brand text-uppercase font-weight-bold" href="/">
        <img src="/assets/img/syndicate-logo.png" alt="Syndicate Logo"><br />
        <?php echo Application::$app->config['main']['title'][$languageCode]; ?>
    </a>
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
