<?php
$languageCode = Application::$app->config['language']['code'];
?>
<div class="portfolio">

    <?php include "header.php"; ?>

    <div class="works">
        <?php
        $i = 1;

        shuffle(Application::$app->config['works']);

        foreach (Application::$app->config['works'] as $i => $work) {

            echo '<a href="' . $work[1][$languageCode]['url'] . '" class="work work_' . ($i % 2 == 0 ? 'even' : 'odd') .
                ($i == 0 ? ' work_first' : '') . '">';
            echo '<video id="playerwork-' . $i . '-player" ' .
                'poster="' . $work[1][$languageCode]['posterImage'] .
                '" class="work__video" muted loop playsinline preload="metadata">';

            foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            echo '</video>';

            echo '<div class="work-info">' . $work[1][$languageCode]['posterDescription'] . '</div>';
            echo '<div class="work-name">' . $work[1][$languageCode]['navbarTitle'] . '</div>';
            echo '</a>';
            $i += 1;
        }
        ?>
    </div>

    <?php include "footer.php"; ?>

    <?php echo Application::$app->assetManager->js; ?>

</div>
