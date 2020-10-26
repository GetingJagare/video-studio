<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
?>
<div class="d-flex flex-column h-100">

    <?php include "header.php"; ?>

    <h1 class="page-title"><?php echo $config['menu'][$languageCode]['about']['title']; ?></h1>

    <div class="container-fluid flex-grow-1">
        <div class="about__row">
            <div class="about__col">
                <?php echo $config['about'][$languageCode]['text1']; ?>
            </div>
            <div class="about__col">
                <?php echo $config['about'][$languageCode]['text2']; ?>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

</div>
