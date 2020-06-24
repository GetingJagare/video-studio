<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer id="marquee" class="marquee">
    <span>
            <?php
            foreach (Application::$app->config['contacts'][$languageCode]['motto'] as $tag) {
                echo '<span><a class="work-hashtag-link" href="#">' . $tag . '</a></span>';
            }
            ?>
        </span>
</footer>