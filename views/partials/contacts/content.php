<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
?>
<div class="d-flex flex-column h-100">

    <?php include "header.php"; ?>

    <h1 class="page-title"><?php echo $config['menu'][$languageCode]['contacts']['title']; ?></h1>

    <div class="contacts flex-grow-1">
        <?php
        echo $config['contacts'][$languageCode]['realWorld'];
        foreach ($config['contacts'][$languageCode]['socialLinks'] as $socialLink) {
            echo "<a href=\"" . $socialLink['url'] . "\" class=\"contacts__link\" target=\"_blank\">" .
            "<img src=\"" . $socialLink['icon'] . "\" alt=\"" . $socialLink['altText'] . "\" class=\"contacts__link-image\">" .
            "</a>";
        }
        ?>
    </div>

    <?php include "footer.php"; ?>

</div>
