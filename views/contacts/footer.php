<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer class="footer">
    <div class="marquee" id="marquee">
        <div class="marquee__wrapper">
            <?php
            foreach (Application::$app->config['contacts'][$languageCode]['motto'] as $tag) {
                echo '<span><a class="work-hashtag-link" href="#">' . $tag . '</a></span>';
            }
            ?>
        </div>
    </div>
</footer>