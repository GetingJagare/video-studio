<?php
$languageCode = Application::$app->config['language']['code'];
$languageSwitcherLabel = Application::$app->config['language']['switcherLabel'];
$languageSwitcherUrl = Application::$app->config['language']['switcherUrl'];

$works = Application::$app->config['works'];
$workId = Application::$app->viewManager->params['id'];
$work = $works[$workId - 1];

?>

<nav class="navbar navbar-expand-md fixed-top align-items-start mt-2 mx-2 justify-content-between">
    <div class="mx-3 m-0">
        <a class="navbar-brand p-0 mx-0 mb-0" href="/"><img src="/assets/img/syndicate-logo.png" alt="Syndicate Logo"></a>
    </div>
    <div class="navbar-text text-center flex-column mx-3 my-2 p-0"><?php echo $work[1][$languageCode]['navbarTitle']; ?></div>
    <div class="navbar-toggler mx-3 my-2 p-0" data-toggle="collapse" data-target=".collapsible-item">
        <div class="navbar-toggler__line"></div>
    </div>
    <ul class="navbar-nav navbar-collapse collapsible-item collapse justify-content-end flex-grow-0">
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
</nav>