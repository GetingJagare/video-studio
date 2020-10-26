<?php

namespace app\helpers;

/**
 * @return \Application
 */
function app()
{
    return \Application::$app;
}

/**
 * @return \app\ViewManager\ViewManager
 */
function view()
{
    return app()->viewManager;
}

/**
 * @return \app\AssetManager\AssetManager
 */
function assets()
{
    return app()->assetManager;
}

/**
 * @return array
 */
function config()
{
    return app()->config;
}

/**
 * @param mixed $data
 *
 * @return void
 */
function downloadFile($data)
{
    header("Content-Type: {$data['mimetype']}");
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"{$data['filename']}\"");
    readfile($data['link']);
}
