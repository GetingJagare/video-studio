<?php $config = \app\helpers\config(); ?>
<!doctype html>
<html>
<head>
    <?php if ($_SERVER['HTTP_HOST'] == $config['main']['domain']) { ?>
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
    <?php } ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $config['main']['description']; ?>" />

    <meta property="og:url" content="<?php echo 'http' . (isset($_SERVER['HTTPS']) ? '?' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />

    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $config['main']['description']; ?>" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="<?php echo $title; ?>" />
    <meta property="twitter:description" content="<?php echo $config['main']['description']; ?>" />

    <?php $assets = \app\helpers\assets(); ?>
    <?php echo $assets->css; ?>
    <?php echo $assets->preload; ?>

</head>

<body class="body <?php echo $assets->route; ?>-page">
<div class="black-back"></div>

<?php echo $content ?? '' ?>

<?php if ($_SERVER['HTTP_HOST'] == $config['main']['domain']) { ?>
<noscript><div><img src="https://mc.yandex.ru/watch/52477828" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php } ?>

<?php echo $assets->js; ?>

</body>

</html>
