<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div class="d-flex flex-column min-vh-100 m-min-vh-75">

    <?php include __DIR__ . '/header.php'; ?>

    <h1 class="page-title"><?php echo Application::$app->config['menu'][$languageCode]['contacts']['title']; ?></h1>

    <div class="contacts flex-grow-1">
        <?php
        echo Application::$app->config['contacts'][$languageCode]['realWorld'];
        foreach (Application::$app->config['contacts'][$languageCode]['socialLinks'] as $socialLink) {
            echo "<a href=\"" . $socialLink['url'] . "\" class=\"contacts__link\" target=\"_blank\">" .
            "<img src=\"" . $socialLink['icon'] . "\" alt=\"" . $socialLink['altText'] . "\" class=\"contacts__link-image\">" .
            "</a>";
        }
        ?>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>

    <?php echo Application::$app->assetManager->js; ?>

</div>