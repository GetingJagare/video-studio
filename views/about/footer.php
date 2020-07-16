<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer class="footer footer_fixed footer_bottom_0">
    <div id="marquee" class="marquee">
        <div class="marquee__wrapper marquee__wrapper_active" data-images="true">
            <?php
            foreach (Application::$app->config['about'][$languageCode]['clientLogos'] as $clientLogo) {
                echo '<img src="' . $clientLogo . '" class="marquee__logo">';
            }
            ?>
        </div>
    </div>
</footer>
