<?php

function findWorkByUrl($work)
{
    return preg_match($work[0], $_SERVER['REQUEST_URI']);
}

return [
    ['/^\/works\/1\/.*$/', [
        'en' => [
            'url' => '/works/1',
            'title' => 'Lorem1 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #1',
            'navbarTitle' => 'Work #1',
            'description' => 'Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work1.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work1.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #1-1', 'url' => '#'],
                ['tag' => 'hashtag #1-2', 'url' => '#'],
                ['tag' => 'hashtag #1-3', 'url' => '#'],
                ['tag' => 'hashtag #1-4', 'url' => '#'],
                ['tag' => 'hashtag #1-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/1',
            'title' => '',
            'pageTitle' => 'Яндекс.Такси',
            'navbarTitle' => 'Яндекс.Такси',
            'description' => 'Интеграция Яндекс.Такси в шапку программы Утро Пятницы на Пятнице.<br> Спонсор программы ООО «Яндекс.Такси». <br>Производство ООО «Студия Синдикат» по заказу «Газпромбанк» (акционерное общество) для ООО «Телекомпания Пятница» ©',
            'posterDescription' => 'Интеграция Яндекс.Такси в шапку программы Утро Пятницы на Пятнице.<br> Спонсор программы ООО «Яндекс.Такси». <br>Производство ООО «Студия Синдикат» по заказу «Газпромбанк» (акционерное общество) для ООО «Телекомпания Пятница» ©',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work1.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work1.jpg',
            'hashTags' => [
                ['tag' => 'Реклама', 'url' => '#'],
                ['tag' => 'Интеграция', 'url' => '#'],
                ['tag' => 'Утро', 'url' => '#'],
                ['tag' => 'Пятница', 'url' => '#'],
                ['tag' => 'Яндекс.Такси', 'url' => '#'],
                ['tag' => 'Мы Успеем', 'url' => '#'],
                ['tag' => 'Просыпайтесь', 'url' => '#'],
                ['tag' => 'Маша Ивакова', 'url' => '#'],
                ['tag' => 'Маривалери', 'url' => '#'],
                ['tag' => 'Лера Дергилёва', 'url' => '#'],
            ]]]],

    ['/^\/works\/2\/.*$/', [
        'en' => [
            'url' => '/works/2',
            'title' => 'Lorem2 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #2',
            'navbarTitle' => 'Work #2',
            'description' => 'Lorem2 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem2 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work2.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work2.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #2-1', 'url' => '#'],
                ['tag' => 'hashtag #2-2', 'url' => '#'],
                ['tag' => 'hashtag #2-3', 'url' => '#'],
                ['tag' => 'hashtag #2-4', 'url' => '#'],
                ['tag' => 'hashtag #2-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/2',
            'title' => '',
            'pageTitle' => 'Газпромбанк',
            'navbarTitle' => 'Газпромбанк',
            'description' => 'Заставка Газпромбанк к программе Регина +1 на Пятнице. <br>Спонсор программы «Газпромбанк» (акционерное общество). <br>Производство ООО «Студия Синдикат» по заказу ООО «Яндекс.Такси» для ООО «Телекомпания Пятница» ©',
            'posterDescription' => 'Заставка Газпромбанк к программе Регина +1 на Пятнице. <br>Спонсор программы «Газпромбанк» (акционерное общество). <br>Производство ООО «Студия Синдикат» по заказу ООО «Яндекс.Такси» для ООО «Телекомпания Пятница» ©',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work2.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work2.jpg',
            'hashTags' => [
                ['tag' => 'Реклама', 'url' => '#'],
                ['tag' => 'Заставка', 'url' => '#'],
                ['tag' => 'Регина+1', 'url' => '#'],
                ['tag' => 'Пятница', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
                ['tag' => 'С заботой о мамах', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
            ]]]],

    ['/^\/works\/3\/.*$/', [
        'en' => [
            'url' => '/works/3',
            'title' => 'Lorem3 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #3',
            'navbarTitle' => 'Work #3',
            'description' => 'Lorem3 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem3 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work3.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work3.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #3-1', 'url' => '#'],
                ['tag' => 'hashtag #3-2', 'url' => '#'],
                ['tag' => 'hashtag #3-3', 'url' => '#'],
                ['tag' => 'hashtag #3-4', 'url' => '#'],
                ['tag' => 'hashtag #3-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/3',
            'title' => '',
            'pageTitle' => 'TIC TAC',
            'navbarTitle' => 'TIC TAC',
            'description' => 'Заставка TIC TAC к программе Орёл и Решка на Пятнице. <br>Спонсор программы ЗАО «Ферреро Руссия». <br>Производство ООО «Студия Синдикат» по заказу ЗАО «Ферреро Руссия» для ООО «Телекомпания Пятница»©',
            'posterDescription' => 'Заставка TIC TAC к программе Орёл и Решка на Пятнице. <br>Спонсор программы ЗАО «Ферреро Руссия». <br>Производство ООО «Студия Синдикат» по заказу ЗАО «Ферреро Руссия» для ООО «Телекомпания Пятница»©',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work3.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work3.jpg',
            'hashTags' => [
                ['tag' => 'Реклама', 'url' => '#'],
                ['tag' => 'Заставка', 'url' => '#'],
                ['tag' => 'ОрёлРешка', 'url' => '#'],
                ['tag' => 'Индия', 'url' => '#'],
                ['tag' => 'Девадаси', 'url' => '#'],
                ['tag' => 'Новая встреча', 'url' => '#'],
                ['tag' => 'Пятница', 'url' => '#'],
                ['tag' => 'TIC TAC', 'url' => '#'],
                ['tag' => 'Освежи настроение', 'url' => '#'],
                ['tag' => 'Коля Серга', 'url' => '#'],
            ]]]],

    ['/^\/works\/4\/.*$/', [
        'en' => [
            'url' => '/works/4',
            'title' => 'Lorem4 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #4',
            'navbarTitle' => 'Work #4',
            'description' => 'Lorem4 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem4 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work4.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work4.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #4-1', 'url' => '#'],
                ['tag' => 'hashtag #4-2', 'url' => '#'],
                ['tag' => 'hashtag #4-3', 'url' => '#'],
                ['tag' => 'hashtag #4-4', 'url' => '#'],
                ['tag' => 'hashtag #4-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/4',
            'title' => '',
            'pageTitle' => 'Purina Pro Plan',
            'navbarTitle' => 'Purina Pro Plan',
            'description' => 'Серия заставок Purina Pro Plan к сериалу Любимцы на Пятнице. <br>Спонсор показа ООО «Нестле Россия». <br>Производство ООО «Студия Синдикат» по заказу ООО «Нестле Россия» для ООО «Телекомпания Пятница»©',
            'posterDescription' => 'Серия заставок Purina Pro Plan к сериалу Любимцы на Пятнице. <br>Спонсор показа ООО «Нестле Россия». <br>Производство ООО «Студия Синдикат» по заказу ООО «Нестле Россия» для ООО «Телекомпания Пятница»©',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work4.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work4.jpg',
            'hashTags' => [
                ['tag' => 'Реклама', 'url' => '#'],
                ['tag' => 'Заставка', 'url' => '#'],
                ['tag' => 'Любимцы', 'url' => '#'],
                ['tag' => 'Пятница', 'url' => '#'],
                ['tag' => 'Корм', 'url' => '#'],
                ['tag' => 'Purina Pro Plan', 'url' => '#'],
                ['tag' => 'Правильное Питание', 'url' => '#'],
                ['tag' => 'Здоровое Будущее', 'url' => '#'],
                ['tag' => 'Михаил Башкатов', 'url' => '#'],
                ['tag' => 'Антон Лапшин', 'url' => '#'],
            ]]]],

    ['/^\/works\/5\/.*$/', [
        'en' => [
            'url' => '/works/5',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #8',
            'navbarTitle' => 'Work #8',
            'description' => 'Lorem8 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem8 ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work8.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work8.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #8-1', 'url' => '#'],
                ['tag' => 'hashtag #8-2', 'url' => '#'],
                ['tag' => 'hashtag #8-3', 'url' => '#'],
                ['tag' => 'hashtag #8-4', 'url' => '#'],
                ['tag' => 'hashtag #8-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/5',
            'title' => '',
            'pageTitle' => 'Выборы в Мосгордуму',
            'navbarTitle' => 'Выборы в Мосгордуму',
            'description' => '8 сентября Выборы в Мосгордуму. <br>Производство ООО «Студия Синдикат»',
            'posterDescription' => '8 сентября Выборы в Мосгордуму. <br>Производство ООО «Студия Синдикат»',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work8.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/work8.jpg',
            'hashTags' => [
                ['tag' => 'Москва', 'url' => '#'],
                ['tag' => 'Участвую в развитии', 'url' => '#'],
                ['tag' => 'Как похорошела Москва', 'url' => '#'],
                ['tag' => '8 сентября', 'url' => '#'],
                ['tag' => 'Выборы', 'url' => '#'],
                ['tag' => 'Мосгордума', 'url' => '#']
            ]]]],
];
