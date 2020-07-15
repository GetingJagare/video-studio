<?php

$languageCode = Application::$app->config['language']['code'];

$works = Application::$app->config['works'];
$workId = Application::$app->viewManager->params['id'];
$work = isset($works[$workId - 1]) ? $works[$workId - 1] : null;

if (!$work) {

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");

    exit;
}

?>

<?php
$languageSwitcherLabel = Application::$app->config['language']['switcherLabel'];
$languageSwitcherUrl = Application::$app->config['language']['switcherUrl'];
?>

<div class="d-flex flex-column h-100">

    <?php include "header.php"; ?>

    <div class="work single flex-grow-1">

        <video id="work-player" poster="<?php echo $work[1][$languageCode]['posterImage']; ?>"
               muted loop autoplay preload="metadata" class="work__video" playsinline>
            <?php
            foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            ?>
        </video>

        <h1 class="work-title"><?php echo $work[1][$languageCode]['pageTitle']; ?></h1>

        <div class="work-title work-title_sub"><?php echo $work[1][$languageCode]['title']; ?></div>

        <p class="work-description"><?php echo $work[1][$languageCode]['description']; ?></p>
    </div>

    <?php
    $copyright = Application::$app->config['copyright'][$languageCode];
    ?>

    <?php include "footer.php"; ?>

</div>

<?php echo Application::$app->assetManager->js; ?>
