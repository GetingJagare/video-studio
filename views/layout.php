<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>

    <?php echo Application::$app->assetManager->css; ?>

</head>

<body class="body <?php echo Application::$app->assetManager->route; ?>-page">
    <div class="black-back"></div>

    <?php include Application::$app->viewManager->routeViewPath . '/content.php'; ?>
</body>

</html>