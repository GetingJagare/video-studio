<?php
$languageCode = Application::$app->config['language']['code'];
$title = \Application::$app->config['menu'][$languageCode]['works']['title'] . ' — Syndicate Studio';
$content = Application::$app->viewManager->loadView("/partials/works/content");
include "layouts/common.php";
?>
