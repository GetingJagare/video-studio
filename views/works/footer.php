<?php
$languageCode = Application::$app->config['language']['code'];
$copyright = Application::$app->config['copyright'][$languageCode];
?>

<footer class="footer sticky-bottom">
    <p class="text-center text-white copyright"><?php echo $copyright; ?></p>
</footer>