<?php

namespace app\ViewManager;

/**
 * Class ViewManager
 */
class ViewManager
{

    /** @var string */
    public $route;

    /** @var array */
    public $params = [];

    public function run()
    {
        \Application::$app->assetManager->route = $this->route;

        \Application::$app->assetManager->run();

        $viewPath = \Application::$app->config['main']['viewsPath'];

        $routeViewPath = $viewPath . "/" . ltrim($this->route, " /");

        $title = $this->getTitle();

        foreach (['header', 'footer', 'content'] as $var) {
            ob_start();

            include "$routeViewPath/$var.php";

            ${$var} = ob_get_contents();
            ob_end_clean();
        }

        header("HTTP/1.1 200 OK");

        include "$viewPath/layout.php";

        exit;
    }

    private function getTitle()
    {

        $languageCode = \Application::$app->config['language']['code'];

        switch ($this->route) {
            case 'main':
                return 'Syndicate Studio';
                break;

            case 'contacts':

                return \Application::$app->config['menu'][$languageCode]['contacts']['title'] .
                    ' — Syndicate Studio';

                break;

            case 'about':

                return \Application::$app->config['menu'][$languageCode]['about']['title'] .
                    ' — Syndicate Studio';

                break;

            case 'works':

                return \Application::$app->config['menu'][$languageCode]['works']['title'] .
                    ' — Syndicate Studio';

                break;

            case 'work':

                $work = \Application::$app->config['works'][$this->params['id'] - 1];

                return $work[1][$languageCode]['pageTitle'] . ' — Syndicate Studio';

                break;
        }

    }

}