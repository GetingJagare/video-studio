<?php

$languageCode = Application::$app->config['language']['code'];

$works = Application::$app->config['works'];
$workId = Application::$app->viewManager->params['id'];
$work = $works[$workId - 1];

?>

<?php echo $header; ?>

    <div class="work single">

        <?php $videoFile = $work[1][$languageCode]['videoFiles'][0]; ?>

        <video id="work-player" poster="<?php echo $work[1][$languageCode]['posterImage']; ?>" muted loop autoplay
               preload="metadata" class="work__video" playsinline>
            <source src="<?php echo $videoFile['src']; ?>" type="<?php echo $videoFile['type']; ?>">
        </video>

        <h1 class="work-title"><?php echo $work[1][$languageCode]['pageTitle']; ?></h1>

        <div class="work-title work-title_sub"><?php echo $work[1][$languageCode]['title']; ?></div>

        <p class="work-description"><?php echo $work[1][$languageCode]['description']; ?></p>
    </div>

<?php echo $footer; ?>

<?php echo Application::$app->assetManager->js; ?>