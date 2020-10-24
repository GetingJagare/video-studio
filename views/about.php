<?php
$languageCode = Application::$app->config['language']['code'];
$title = \Application::$app->config['menu'][$languageCode]['about']['title'] . ' — Syndicate Studio';
$content = Application::$app->viewManager->loadView("/partials/about/content");
include "layouts/common.php";
?>
