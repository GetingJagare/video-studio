<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
$params = \Application::$app->viewManager->params;

$work = $config['works'][$this->params['id'] - 1];
$title = $work[1][$languageCode]['pageTitle'] . ' — Syndicate Studio';
$content = \app\helpers\view()->loadView("/partials/work/content");
include "layouts/common.php";
?>
