<?php

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

if ($_GET['lang'] === 'en') {
    setcookie('lang', 'en', time() + 60 * 60 * 24 * 30, '/');
    header('Location: .', true, 303);
    exit;
}

if ($_GET['lang'] === 'ru') {
    setcookie('lang', 'ru', time() + 60 * 60 * 24 * 30, '/');
    header('Location: .', true, 303);
    exit;
}

$language = [
    'code' => '',
    'switcherLabel' => '',
    'switcherUrl' => ''];

if ($_COOKIE['lang'] === 'ru') {
    $language['code'] = 'ru';
    $language['switcherLabel'] = 'Eng';
    $language['switcherUrl'] = './?lang=en';
} else if ($_COOKIE['lang'] === 'en') {
    $language['code'] = 'en';
    $language['switcherLabel'] = 'Rus';
    $language['switcherUrl'] = './?lang=ru';
} else if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === 'ru') {
    $language['code'] = 'ru';
    $language['switcherLabel'] = 'Eng';
    $language['switcherUrl'] = './?lang=en';
} else {
    $language['code'] = 'en';
    $language['switcherLabel'] = 'Rus';
    $language['switcherUrl'] = './?lang=ru';
}

?>
