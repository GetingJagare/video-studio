<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div>

    <?php echo $header; ?>

    <div class="works">
        <?php
        $i = 1;
        foreach (Application::$app->config['works'] as $i => $work) {

            echo '<a href="' . $work[1][$languageCode]['url'] . '" class="work">';
            echo '<video id="playerwork-' . $i . '-player" poster="' . $work[1][$languageCode]['posterImage'] .
                '" class="work__video" muted loop playsinline preload="metadata">';

            foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            echo '</video>';

            echo '<div class="work-info">' . $work[1][$languageCode]['posterDescription'] . '</div>';
            echo '<div class="work-name ' . ($i % 2 == 0 ? 'text-left' : 'text-right') . '">' .
                $work[1][$languageCode]['navbarTitle'] . '</div>';
            echo '</a>';
            $i += 1;
        }
        ?>
    </div>

    <?php echo $footer; ?>

    <?php echo Application::$app->assetManager->js; ?>

</div>