<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
$title = $config['menu'][$languageCode]['contacts']['title'] . ' — Syndicate Studio';
$content = \app\helpers\view()->loadView("/partials/contacts/content");
include "layouts/common.php";
?>
