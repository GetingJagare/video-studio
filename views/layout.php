<!doctype html>
<html>
<head>
    <script> (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, k.defer = 1, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(52477828, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            trackHash: true
        });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>

    <?php echo Application::$app->assetManager->css; ?>

    <?php

    if (Application::$app->assetManager->route == 'contacts') {
        echo '<link rel="preload" href="/dist/img/back.jpg" as="image" />';
    }

    ?>

</head>

<body class="body <?php echo Application::$app->assetManager->route; ?>-page">
<div class="black-back"></div>

<?php include Application::$app->viewManager->routeViewPath . '/content.php'; ?>

<noscript><div><img src="https://mc.yandex.ru/watch/52477828" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>

</html>
