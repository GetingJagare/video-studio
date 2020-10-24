<?php

namespace app\ViewManager;

/**
 * Class ViewManager
 */
class ViewManager
{

    /** @var string */
    public $route;

    /** @var string */
    public $routeFile;

    /** @var string */
    public $viewPath;

    /** @var array */
    public $params = [];

    public function run()
    {
        \Application::$app->assetManager->route = $this->route;

        \Application::$app->assetManager->run();

        $this->viewPath = \Application::$app->config['main']['viewsPath'];

        header("HTTP/1.1 200 OK");

        $routeFile = preg_replace("/\..+$/", "", $this->route) . ".php";

        include "{$this->viewPath}/{$routeFile}";

        exit;
    }

    /**
     * @param $view
     * @return false|string
     */
    public function loadView($view)
    {
        ob_start();

        include "{$this->viewPath}/$view.php";

        return ob_get_clean();
    }

}
