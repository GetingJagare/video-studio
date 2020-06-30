<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer class="footer">
    <div id="marquee" class="marquee">
        <?php
        foreach (Application::$app->config['about'][$languageCode]['clientLogos'] as $clientLogo) {
            echo '<img src="' . $clientLogo . '" class="marquee__logo">';
        }
        ?>
    </div>
</footer>