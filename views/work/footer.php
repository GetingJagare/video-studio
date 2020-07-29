<?php
$copyright = Application::$app->config['copyright'][$languageCode];

$works = Application::$app->config['works'];
$workId = Application::$app->viewManager->params['id'];
$work = $works[$workId - 1];

?>

<footer class="footer sticky-bottom">
    <div id="marquee" class="marquee">
        <div class="marquee__wrapper marquee__wrapper_active" data-shuffle="true">
            <?php
            foreach ($work[1][$languageCode]['hashTags'] as $hashtag) {
                echo '<span><a class="work-hashtag-link" href="' . $hashtag['url'] . '">' . $hashtag['tag'] . '</a></span>';
            }
            ?>
        </div>
    </div>
</footer>
