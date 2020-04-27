<?php

$languageCode = Application::$app->config['language']['code'];

?>

<footer id="marquee" class="marquee">
    <span><span class="contacts-motto"><?php echo Application::$app->config['contacts'][$languageCode]['motto']; ?></span></span>
</footer>