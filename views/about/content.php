<?php

$languageCode = Application::$app->config['language']['code'];

?>

<div class="d-flex flex-column min-vh-100">

<?php echo $header; ?>

<h1 class="page-title"><?php echo Application::$app->config['menu'][$languageCode]['about']['title']; ?></h1>

<div class="container-fluid about flex-grow-1">
    <div class="about__row">
        <div class="about__col">
            <?php echo Application::$app->config['about'][$languageCode]['text1']; ?>
        </div>
        <div class="about__col">
            <?php echo Application::$app->config['about'][$languageCode]['text2']; ?>
        </div>
    </div>
</div>

<?php echo $footer; ?>

<?php echo Application::$app->assetManager->js; ?>

</div>