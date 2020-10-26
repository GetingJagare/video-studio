<footer class="footer footer_fixed footer_bottom_0">
    <div class="marquee" id="marquee">
        <div class="marquee__wrapper marquee__wrapper_active" data-shuffle="true">
            <?php
            foreach ($config['contacts'][$languageCode]['motto'] as $tag) {
                echo '<span><a class="work-hashtag-link" href="#">' . $tag . '</a></span>';
            }
            ?>
        </div>
    </div>
</footer>
