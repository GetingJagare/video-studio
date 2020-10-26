<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
$title = $config['menu'][$languageCode]['works']['title'] . ' — Syndicate Studio';
$content = \app\helpers\view()->loadView("/partials/works/content");
include "layouts/common.php";
?>
