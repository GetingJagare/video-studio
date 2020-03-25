<?php

$languageCode = Application::$app->config['language']['code'];
$worksToShow = 9;

?>

<body>

<div class="showreel">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <?php
        foreach (Application::$app->config['showreel'][$languageCode]['videoFiles'] as $videoFile) {
            echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
        }
        ?>
    </video>
    <img class="syndicate-logo img-fluid"
         src="<?php echo Application::$app->config['showreel'][$languageCode]['logoImage']; ?>" alt="Syndicate Logo">
    <div class="syndicate-logline"><?php echo Application::$app->config['showreel'][$languageCode]['description']; ?></div>
    <div class="chevron"></div>
</div>

<div class="under-showreel">

    <?php echo $header; ?>

    <div class="works">

        <?php
        for ($i = 0; $i < $worksToShow; $i++) {
            echo '<a href="' . Application::$app->config['works'][$i][1][$languageCode]['url'] . '">' . "\n";
            echo '<video id="playerwork-' . ($i + 1) . '-player" poster="' . Application::$app->config['works'][$i][1][$languageCode]['posterImage'] . '">' . "\n";
            foreach (Application::$app->config['works'][$i][1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
            }
            echo '</video>' . "\n";
            echo '<div class="work-info">' . Application::$app->config['works'][$i][1][$languageCode]['posterDescription'] . '</div>' . "\n";
            echo '<div class="work-name">' . Application::$app->config['works'][$i][1][$languageCode]['navbarTitle'] . '</div>' . "\n";
            echo '</a>' . "\n\n";
        }
        ?>

    </div>

    <?php echo $footer; ?>
</div>

<?php echo Application::$app->assetManager->js; ?>

</body>