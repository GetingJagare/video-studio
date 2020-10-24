<?php
$languageCode = Application::$app->config['language']['code'];
$params = \Application::$app->viewManager->params;

$work = \Application::$app->config['works'][$this->params['id'] - 1];
$title = $work[1][$languageCode]['pageTitle'] . ' — Syndicate Studio';
$content = Application::$app->viewManager->loadView("/partials/work/content");
include "layouts/common.php";
?>
