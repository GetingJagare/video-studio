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
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work1.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/work1.webm', 'type' => 'video/webm'],
            ],
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
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work2.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/work2.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/work2.jpg',
            'hashTags' => [
                ['tag' => 'Реклама', 'url' => '#'],
                ['tag' => 'Заставка', 'url' => '#'],
                ['tag' => 'Регина+1', 'url' => '#'],
                ['tag' => 'Пятница', 'url' => '#'],
                ['tag' => 'Газпромбанк', 'url' => '#'],
                ['tag' => 'С заботой о мамах', 'url' => '#'],
                ['tag' => 'Повышенный Кэшбэк', 'url' => '#'],
                ['tag' => 'Быть мамой', 'url' => '#'],
                ['tag' => 'Наш Малыш', 'url' => '#'],
                ['tag' => 'Регина Тодоренко', 'url' => '#'],
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
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work3.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/work3.webm', 'type' => 'video/webm'],
            ],
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
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work4.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/work4.webm', 'type' => 'video/webm'],
            ],
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
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/work8.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/work8.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/work8.jpg',
            'hashTags' => [
                ['tag' => 'Москва', 'url' => '#'],
                ['tag' => 'Участвую в развитии', 'url' => '#'],
                ['tag' => 'Как похорошела Москва', 'url' => '#'],
                ['tag' => '8 сентября', 'url' => '#'],
                ['tag' => 'Выборы', 'url' => '#'],
                ['tag' => 'Мосгордума', 'url' => '#']
            ]]]],
    ['/^\/works\/6\/.*$/', [
        'en' => [
            'url' => '/works/6',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/6',
            'title' => '',
            'pageTitle' => 'ШАГВМЕСТЕ',
            'navbarTitle' => 'ШАГВМЕСТЕ',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/ШАГВМЕСТЕ.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/ШАГВМЕСТЕ.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/ШАГВМЕСТЕ.jpg',
            'hashTags' => [
                ['tag' => 'шагвместе', 'url' => '#'],
                ['tag' => 'гошакуценко', 'url' => '#'],
                ['tag' => 'всезвезды', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'благотворительныйфонд', 'url' => '#']
            ]
        ]]
    ],
    ['/^\/works\/7\/.*$/', [
        'en' => [
            'url' => '/works/7',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/7',
            'title' => '',
            'pageTitle' => '200 лет Манежу',
            'navbarTitle' => '200 лет Манежу',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/200 лет Манежу.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/200 лет Манежу.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/200 лет Манежу.jpg',
            'hashTags' => [
                ['tag' => 'Esquire', 'url' => '#'],
                ['tag' => '200летманежу', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'всезвезды', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/8\/.*$/', [
        'en' => [
            'url' => '/works/8',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/8',
            'title' => '',
            'pageTitle' => 'Burito - Ты всегда ждёшь меня',
            'navbarTitle' => 'Burito - Ты всегда ждёшь меня',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Burito - Ты всегда ждёшь меня.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Burito - Ты всегда ждёшь меня.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Burito - Ты всегда ждёшь меня.jpg',
            'hashTags' => [
                ['tag' => 'Velvetmusic', 'url' => '#'],
                ['tag' => 'Burito', 'url' => '#'],
                ['tag' => 'тывсегдаждешьменя', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/9\/.*$/', [
        'en' => [
            'url' => '/works/9',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/9',
            'title' => '',
            'pageTitle' => 'DAASHA - В сонате',
            'navbarTitle' => 'DAASHA - В сонате',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/DAASHA - В сонате.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/DAASHA - В сонате.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/DAASHA - В сонате.jpg',
            'hashTags' => []
        ]]],
    ['/^\/works\/10\/.*$/', [
        'en' => [
            'url' => '/works/10',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/10',
            'title' => '',
            'pageTitle' => 'Dom Rosa Liquides Imaginaires',
            'navbarTitle' => 'Dom Rosa Liquides Imaginaires',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Dom Rosa Liquides Imaginaires.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Dom Rosa Liquides Imaginaires.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Dom Rosa Liquides Imaginaires.jpg',
            'hashTags' => [
                ['tag' => 'liquidesimaginaires', 'url' => '#'],
                ['tag' => 'DavidFrossard', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/11\/.*$/', [
        'en' => [
            'url' => '/works/11',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/11',
            'title' => '',
            'pageTitle' => 'Maligina',
            'navbarTitle' => 'Maligina',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Maligina.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Maligina.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Maligina.jpg',
            'hashTags' => []
        ]]],
    ['/^\/works\/12\/.*$/', [
        'en' => [
            'url' => '/works/12',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/12',
            'title' => '',
            'pageTitle' => 'Outlet Village Белая Дача',
            'navbarTitle' => 'Outlet Village Белая Дача',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Outlet Village Белая Дача.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Outlet Village Белая Дача.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Outlet Village Белая Дача.jpg',
            'hashTags' => [
                ['tag' => 'outletvillagebelayadacha', 'url' => '#'],
                ['tag' => 'Tolya Kozyrev', 'url' => '#'],
                ['tag' => 'newhero', 'url' => '#'],
                ['tag' => 'lilajacobs', 'url' => '#'],
                ['tag' => 'zabelin', 'url' => '#'],
                ['tag' => 'DOP Константин Колесников', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/13\/.*$/', [
        'en' => [
            'url' => '/works/13',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/13',
            'title' => '',
            'pageTitle' => 'Ustinova - Я-Птица',
            'navbarTitle' => 'Ustinova - Я-Птица',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Ustinova - Я-Птица.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Ustinova - Я-Птица.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Ustinova - Я-Птица.jpg',
            'hashTags' => [
                ['tag' => 'ОксанаУстинова', 'url' => '#'],
                ['tag' => 'Птица', 'url' => '#'],
                ['tag' => 'клипза300', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'любимыйстиль', 'url' => '#']
            ]
        ]]],
    ['/^\/works\/14\/.*$/', [
        'en' => [
            'url' => '/works/14',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/14',
            'title' => '',
            'pageTitle' => 'Валерия - Микроинфаркты',
            'navbarTitle' => 'Валерия - Микроинфаркты',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Валерия - Микроинфаркты.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Валерия - Микроинфаркты.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Валерия - Микроинфаркты.jpg',
            'hashTags' => [
                ['tag' => 'Валерия', 'url' => '#'],
                ['tag' => 'ВладимирУшаков', 'url' => '#'],
                ['tag' => 'Микроинфаркты', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/15\/.*$/', [
        'en' => [
            'url' => '/works/15',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/15',
            'title' => '',
            'pageTitle' => 'Влад Лисовец',
            'navbarTitle' => 'Влад Лисовец',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Влад Лисовец.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Влад Лисовец.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Влад Лисовец.jpg',
            'hashTags' => [
                ['tag' => 'владлисовец', 'url' => '#'],
                ['tag' => 'contora_lisovets', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/16\/.*$/', [
        'en' => [
            'url' => '/works/16',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/16',
            'title' => '',
            'pageTitle' => 'Владимир Пресняков - Неземная',
            'navbarTitle' => 'Владимир Пресняков - Неземная',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Владимир Пресняков - Неземная.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Владимир Пресняков - Неземная.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Владимир Пресняков - Неземная.jpg',
            'hashTags' => [
                ['tag' => 'Velvetmusic', 'url' => '#'],
                ['tag' => 'Пресняков', 'url' => '#'],
                ['tag' => 'неземная', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'igorshmelev', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/17\/.*$/', [
        'en' => [
            'url' => '/works/17',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/17',
            'title' => '',
            'pageTitle' => 'Ёлка - Навсегда',
            'navbarTitle' => 'Ёлка - Навсегда',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Ёлка - Навсегда.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Ёлка - Навсегда.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Ёлка - Навсегда.jpg',
            'hashTags' => [
                ['tag' => 'Ёлка', 'url' => '#'],
                ['tag' => 'навсегда', 'url' => '#'],
                ['tag' => 'стасваганов', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'всезвезды', 'url' => '#'],
                ['tag' => 'Velvetmusic', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/18\/.*$/', [
        'en' => [
            'url' => '/works/18',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/18',
            'title' => '',
            'pageTitle' => 'Елена Темникова поет кавер на песню «Новогодние игрушки» — вместе с дочкой!',
            'navbarTitle' => 'Елена Темникова поет кавер на песню «Новогодние игрушки» — вместе с дочкой!',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Елена Темникова поет кавер на песню «Новогодние игрушки» — вместе с дочкой!.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Елена Темникова поет кавер на песню «Новогодние игрушки» — вместе с дочкой!.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Елена Темникова поет кавер на песню «Новогодние игрушки» — вместе с дочкой!.jpg',
            'hashTags' => [
                ['tag' => 'ЛенаТемникова', 'url' => '#'],
                ['tag' => 'GLAMOURRUSSIA', 'url' => '#'],
                ['tag' => 'Инберг', 'url' => '#'],
                ['tag' => 'ВасилийНефедкин', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#']
            ]
        ]]],
    ['/^\/works\/19\/.*$/', [
        'en' => [
            'url' => '/works/19',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/19',
            'title' => '',
            'pageTitle' => 'Звонкий - Паранормальные',
            'navbarTitle' => 'Звонкий - Паранормальные',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Звонкий - Паранормальные.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Звонкий - Паранормальные.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Звонкий - Паранормальные.jpg',
            'hashTags' => [
                ['tag' => 'Velvetmusic', 'url' => '#'],
                ['tag' => 'Звонкий', 'url' => '#'],
                ['tag' => 'паранармально', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'любимыйстиль', 'url' => '#']
            ]
        ]]],
    ['/^\/works\/20\/.*$/', [
        'en' => [
            'url' => '/works/20',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/20',
            'title' => '',
            'pageTitle' => 'Новогодний шопинг в Outlet Village Белая Дача',
            'navbarTitle' => 'Новогодний шопинг в Outlet Village Белая Дача',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Новогодний шопинг в Outlet Village Белая Дача.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Новогодний шопинг в Outlet Village Белая Дача.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Новогодний шопинг в Outlet Village Белая Дача.jpg',
            'hashTags' => [
                ['tag' => 'outletvillagebelayadacha', 'url' => '#'],
                ['tag' => 'Tolya Kozyrev', 'url' => '#'],
                ['tag' => 'newhero', 'url' => '#'],
                ['tag' => 'lilajacobs', 'url' => '#'],
                ['tag' => 'zabelin', 'url' => '#'],
                ['tag' => 'DOP Константин Колесников', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
            ]
        ]]],
    ['/^\/works\/21\/.*$/', [
        'en' => [
            'url' => '/works/21',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/21',
            'title' => '',
            'pageTitle' => 'Ревизорро',
            'navbarTitle' => 'Ревизорро',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Ревизорро.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Ревизорро.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Ревизорро.jpg',
            'hashTags' => []
        ]]],
    ['/^\/works\/22\/.*$/', [
        'en' => [
            'url' => '/works/22',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/22',
            'title' => '',
            'pageTitle' => 'Реклама NESCAFE Dolce Gusto с Машей Иваковой',
            'navbarTitle' => 'Реклама NESCAFE Dolce Gusto с Машей Иваковой',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Реклама NESCAFE Dolce Gusto с Машей Иваковой.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Реклама NESCAFE Dolce Gusto с Машей Иваковой.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Реклама NESCAFE Dolce Gusto с Машей Иваковой.jpg',
            'hashTags' => []
        ]]],
    ['/^\/works\/23\/.*$/', [
        'en' => [
            'url' => '/works/23',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
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
            'url' => '/works/23',
            'title' => '',
            'pageTitle' => 'Юлианна Караулова - Ариведерчи',
            'navbarTitle' => 'Юлианна Караулова - Ариведерчи',
            'description' => '',
            'posterDescription' => '',
            'videoFiles' => [
                ['src' => '/assets/img/videos/Юлианна Караулова - Ариведерчи.mp4', 'type' => 'video/mp4'],
                ['src' => '/assets/img/videos/Юлианна Караулова - Ариведерчи.webm', 'type' => 'video/webm'],
            ],
            'posterImage' => '/assets/img/teasers/Юлианна Караулова - Ариведерчи.jpg',
            'hashTags' => [
                ['tag' => 'ЮлианаКараулова', 'url' => '#'],
                ['tag' => 'Ариведерчи', 'url' => '#'],
                ['tag' => 'ЯнаРудковская', 'url' => '#'],
                ['tag' => 'СашаМясникова', 'url' => '#'],
                ['tag' => 'INBERGKAT', 'url' => '#'],
                ['tag' => 'BroPRO', 'url' => '#'],
            ]
        ]]],
];
