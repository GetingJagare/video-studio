<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer id="marquee">
    <?php
    foreach (Application::$app->config['about'][$languageCode]['clientLogos'] as $clientLogo) {
        echo '<img src="' . $clientLogo . '">' . "\n";
    }
    ?>
</footer>