<?php

$languageCode = Application::$app->config['language']['code'];
$worksToShow = 9;

?>

<div>

    <div class="showreel">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <?php
            foreach (Application::$app->config['showreel'][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            ?>
        </video>
        <img class="syndicate-logo img-fluid"
             src="<?php echo Application::$app->config['showreel'][$languageCode]['logoImage']; ?>"
             alt="Syndicate Logo">
        <div class="syndicate-logline"><?php echo Application::$app->config['showreel'][$languageCode]['description']; ?></div>
        <div class="chevron"></div>
    </div>

    <div class="under-showreel">

        <?php echo $header; ?>

        <div class="works">

            <?php
            for ($i = 0; $i < $worksToShow; $i++) {

                echo '<a href="' . Application::$app->config['works'][$i][1][$languageCode]['url'] . '" class="work">';

                echo '<video id="playerwork-' . ($i + 1) . '-player" ' .
                    'poster="' . Application::$app->config['works'][$i][1][$languageCode]['posterImage'] .
                    '" class="work__video" muted loop>';
                foreach (Application::$app->config['works'][$i][1][$languageCode]['videoFiles'] as $videoFile) {
                    echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
                }
                echo '</video>';
                echo '<div class="work-info">' .
                    Application::$app->config['works'][$i][1][$languageCode]['posterDescription'] .
                    '</div>';
                echo '<div class="work-name ' . ($i % 2 == 0 ? 'text-left' : 'text-right') . '">' .
                    Application::$app->config['works'][$i][1][$languageCode]['navbarTitle'] . '</div>';
                echo '</a>';
            }
            ?>

        </div>

        <?php echo $footer; ?>
    </div>

    <?php echo Application::$app->assetManager->js; ?>

</div>