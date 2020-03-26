<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div>

    <?php echo $header; ?>

    <div class="works">
        <?php
        $i = 1;
        foreach (Application::$app->config['works'] as $i => $work) {
            echo '<a href="' . $work[1][$languageCode]['url'] . '">' . "\n";
            echo '<video id="playerwork-' . $i . '-player" poster="' . $work[1][$languageCode]['posterImage'] . '">' . "\n";
            foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
            }
            echo '</video>' . "\n";
            echo '<div class="work-info">' . $work[1][$languageCode]['posterDescription'] . '</div>' . "\n";
            echo '<div class="work-name ' . ($i % 2 == 0 ? 'text-left' : 'text-right') . '">' .
                $work[1][$languageCode]['navbarTitle'] . '</div>' . "\n";
            echo '</a>' . "\n\n";
            $i += 1;
        }
        ?>
    </div>

    <?php echo $footer; ?>

    <?php echo Application::$app->assetManager->js; ?>

</div>