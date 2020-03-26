<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div class="d-flex flex-column min-vh-100">

    <?php echo $header; ?>

    <h1 class="page-title"><?php echo Application::$app->config['menu'][$languageCode]['contacts']['title']; ?></h1>

    <div class="contacts flex-grow-1">
        <?php
        echo Application::$app->config['contacts'][$languageCode]['realWorld'];
        foreach (Application::$app->config['contacts'][$languageCode]['socialLinks'] as $socialLink) {
            echo '<a href="' . $socialLink['url'] . '"><img src="' . $socialLink['icon'] . '" alt="' . $socialLink['altText'] . '"></a>' . "\n";
        }
        ?>
    </div>

    <?php echo $footer; ?>

    <?php echo Application::$app->assetManager->js; ?>

</div>