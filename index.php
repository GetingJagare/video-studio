<?php

defined('ROOT_DIR') or define('ROOT_DIR', __DIR__);

require_once "autoload.php";

include "app/helpers/helpers.php";

(new Application())->run();
