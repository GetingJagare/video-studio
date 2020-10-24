<?php
$languageCode = Application::$app->config['language']['code'];
$title = \Application::$app->config['menu'][$languageCode]['contacts']['title'] . ' — Syndicate Studio';
$content = Application::$app->viewManager->loadView("/partials/contacts/content");
include "layouts/common.php";
?>
