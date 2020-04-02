<?php

$langCode = isset($_GET['lang']) ? $_GET['lang'] : '';
$cookieLangCode = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : '';

$uri = $_SERVER['REQUEST_URI'];
$uri = preg_replace("/\?.+$/", '', $uri);

if ($langCode === 'en') {
    setcookie('lang', 'en', time() + 60 * 60 * 24 * 30, '/');
    header('Location: ' . $uri, true, 303);
    exit;
}

if ($langCode === 'ru') {
    setcookie('lang', 'ru', time() + 60 * 60 * 24 * 30, '/');
    header('Location: ' . $uri, true, 303);
    exit;
}

$language = [
    'code' => '',
    'switcherLabel' => '',
    'switcherUrl' => ''];

if ($cookieLangCode === 'ru') {
    $language['code'] = 'ru';
    $language['switcherLabel'] = 'Eng';
    $language['switcherUrl'] = $uri . '?lang=en';
} else if ($cookieLangCode === 'en') {
    $language['code'] = 'en';
    $language['switcherLabel'] = 'Rus';
    $language['switcherUrl'] = $uri . '?lang=ru';
} else if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === 'ru') {
    $language['code'] = 'ru';
    $language['switcherLabel'] = 'Eng';
    $language['switcherUrl'] = $uri . '?lang=en';
} else {
    $language['code'] = 'en';
    $language['switcherLabel'] = 'Rus';
    $language['switcherUrl'] = $uri . '?lang=ru';
}

return $language;

?>
