<?php

namespace app\UrlManager;

use app\ViewManager\ViewManager;

/**
 * Class UrlManager
 */
class UrlManager
{

    public function run()
    {

        $requestUri = $_SERVER['REQUEST_URI'];

        $routes = isset(\Application::$app->config['routes']) ? \Application::$app->config['routes'] : [];

        $currentRoute = $routeView = null;

        $params = [];

        foreach ($routes as $route => $view) {

            if (preg_match("/^$route$/", $requestUri, $matches)) {

                $routeView = $view;

                $currentRoute = $route;

                foreach ($matches as $key => $match) {

                    if (!is_numeric($key)) {

                        $params[$key] = $match;

                    }

                }

                break;

            }

        }

        if (!$currentRoute) {

            header("HTTP/1.1 404 Not Found");

            return;

        }

        \Application::$app->viewManager->route = $routeView;

        \Application::$app->viewManager->params = $params;

        \Application::$app->viewManager->run();

    }

}