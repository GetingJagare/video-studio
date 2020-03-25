<?php

/**
 * Class Application
 */
class Application
{

    /** @var \app\UrlManager\UrlManager */
    public $urlManager;

    /** @var \app\AssetManager\AssetManager */
    public $assetManager;

    /** @var \app\ViewManager\ViewManager */
    public $viewManager;

    /** @var self */
    public static $app;

    /** @var array */
    public $config = [];

    public static function run()
    {
        if (!self::$app) {
            self::$app = new self();
        }

        self::$app->setConfig();

        self::$app->urlManager = new app\UrlManager\UrlManager();

        self::$app->assetManager = new app\AssetManager\AssetManager();

        self::$app->viewManager = new app\ViewManager\ViewManager();

        self::$app->urlManager->run();

    }

    private function setConfig()
    {

        $configPath = ROOT_DIR . "/config";

        if (!is_dir($configPath)) {
            return;
        }

        foreach (scandir($configPath) as $fileName) {

            if (!preg_match("/\.php$/", $fileName)) {
                continue;
            }

            $fileNameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);

            $this->config[$fileNameWithoutExtension] = require_once "$configPath/$fileName";

        }

    }
}