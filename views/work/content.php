<?php

$languageCode = Application::$app->config['language']['code'];

$works = Application::$app->config['works'];
$workId = Application::$app->viewManager->params['id'];
$work = $works[$workId - 1];

?>

<body>

<?php echo $header; ?>

<div>
    <video id="work-player" poster="<?php echo $work[1][$languageCode]['posterImage']; ?>">
        <?php
        foreach ($work['videoFiles'] as $videoFile) {
            echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">' . "\n";
        }
        ?>
    </video>
    <div class="unmute-button"></div>
</div>

<h1 class="work-title"><?php echo $work[1][$languageCode]['title']; ?></h1>

<p class="work-description"><?php echo $work[1][$languageCode]['description']; ?></p>

<?php echo $footer; ?>

<?php echo Application::$app->assetManager->js; ?>

</body>