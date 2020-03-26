<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>

    <?php echo Application::$app->assetManager->css; ?>

</head>

<body>
    <?php echo $content; ?>
</body>

</html>