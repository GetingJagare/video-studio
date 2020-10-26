<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
$title = $config['menu'][$languageCode]['about']['title'] . ' — Syndicate Studio';
$content = \app\helpers\view()->loadView("/partials/about/content");
include "layouts/common.php";
?>
