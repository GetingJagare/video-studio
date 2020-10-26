<?php
$config = \app\helpers\config();
$languageCode = $config['language']['code'];
$worksToShow = 5;
?>

<div class="main">

    <div class="showreel">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" preload="metadata"
               class="showreel__video">
            <?php
            foreach ($config['showreel'][$languageCode]['videoFiles'] as $videoFile) {
                preg_match("/(.+)([^\/])+$/", $videoFile['src'], $matches);
                echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
            }
            ?>
        </video>
        <div class="syndicate-logo text-center">
            <img class="img-fluid"
                 src="<?php echo $config['showreel'][$languageCode]['logoImage']; ?>"
                 alt="Syndicate Logo">
            <br>
            <div class="mt-3">
                <?php echo $config['main']['title'][$languageCode]; ?>
            </div>
        </div>
        <div class="syndicate-logline"><?php echo $config['showreel'][$languageCode]['description']; ?></div>
        <div class="chevron"></div>
    </div>

    <div class="under-showreel">

        <?php
        $languageSwitcherLabel = $config['language']['switcherLabel'];
        $languageSwitcherUrl = $config['language']['switcherUrl'];
        ?>

        <?php include "header.php"; ?>

        <div class="works">

            <?php

            shuffle($config['works']);

            foreach ($config['works'] as $i => $work) {

                echo '<a href="' . $work[1][$languageCode]['url'] . '" class="work work_' . ($i % 2 == 0 ? 'even' : 'odd') .
                    ($i == 0 ? ' work_first' : '') . '">';

                echo '<video id="playerwork-' . ($i + 1) . '-player" ' .
                    'poster="' . $work[1][$languageCode]['posterImage'] .
                    '" class="work__video" muted loop preload="metadata">';
                foreach ($work[1][$languageCode]['videoFiles'] as $videoFile) {
                    echo '<source src="' . $videoFile['src'] . '" type="' . $videoFile['type'] . '">';
                }
                echo '</video>';
                echo '<div class="work-info">' .
                    $work[1][$languageCode]['posterDescription'] .
                    '</div>';
                echo '<div class="work-name">' . $work[1][$languageCode]['navbarTitle'] . '</div>';
                echo '</a>';
            }
            ?>

        </div>

        <?php
        $copyright = $config['copyright'][$languageCode];
        ?>

        <?php include "footer.php"; ?>
    </div>

</div>
