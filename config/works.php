<?php

function findWorkByUrl($work) {
    return preg_match($work[0], $_SERVER['REQUEST_URI']);
}

return [
    ['/^\/works\/1\/.*$/', [
        'en' => [
            'url' => '/works/1',
            'title' => 'Lorem1 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #1',
            'navbarTitle' => 'Work #1',
            'description' => 'Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem1 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/VcP0OsEq2n4.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/VcP0OsEq2n4.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #1-1', 'url' => '#'],
                ['tag' => 'hashtag #1-2', 'url' => '#'],
                ['tag' => 'hashtag #1-3', 'url' => '#'],
                ['tag' => 'hashtag #1-4', 'url' => '#'],
                ['tag' => 'hashtag #1-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/1',
            'title' => 'Лорем1 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №1',
            'navbarTitle' => 'Работа №1',
            'description' => 'Лорем1 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем1 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/VcP0OsEq2n4.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/VcP0OsEq2n4.jpg',
            'hashTags' => [
                ['tag' => 'хештег №1-1', 'url' => '#'],
                ['tag' => 'хештег №1-2', 'url' => '#'],
                ['tag' => 'хештег №1-3', 'url' => '#'],
                ['tag' => 'хештег №1-4', 'url' => '#'],
                ['tag' => 'хештег №1-5', 'url' => '#']]]]],

    ['/^\/works\/2\/.*$/', [
        'en' => [
            'url' => '/works/2',
            'title' => 'Lorem2 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #2',
            'navbarTitle' => 'Work #2',
            'description' => 'Lorem2 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem2 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/XgFcBiVepv8.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/XgFcBiVepv8.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #2-1', 'url' => '#'],
                ['tag' => 'hashtag #2-2', 'url' => '#'],
                ['tag' => 'hashtag #2-3', 'url' => '#'],
                ['tag' => 'hashtag #2-4', 'url' => '#'],
                ['tag' => 'hashtag #2-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/2',
            'title' => 'Лорем2 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №2',
            'navbarTitle' => 'Работа №2',
            'description' => 'Лорем2 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем2 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/XgFcBiVepv8.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/XgFcBiVepv8.jpg',
            'hashTags' => [
                ['tag' => 'хештег №2-1', 'url' => '#'],
                ['tag' => 'хештег №2-2', 'url' => '#'],
                ['tag' => 'хештег №2-3', 'url' => '#'],
                ['tag' => 'хештег №2-4', 'url' => '#'],
                ['tag' => 'хештег №2-5', 'url' => '#']]]]],

    ['/^\/works\/3\/.*$/', [
        'en' => [
            'url' => '/works/3',
            'title' => 'Lorem3 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #3',
            'navbarTitle' => 'Work #3',
            'description' => 'Lorem3 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem3 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/gfcOmEbXDVo.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/gfcOmEbXDVo.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #3-1', 'url' => '#'],
                ['tag' => 'hashtag #3-2', 'url' => '#'],
                ['tag' => 'hashtag #3-3', 'url' => '#'],
                ['tag' => 'hashtag #3-4', 'url' => '#'],
                ['tag' => 'hashtag #3-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/3',
            'title' => 'Лорем3 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №3',
            'navbarTitle' => 'Работа №3',
            'description' => 'Лорем3 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем3 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/gfcOmEbXDVo.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/gfcOmEbXDVo.jpg',
            'hashTags' => [
                ['tag' => 'хештег №3-1', 'url' => '#'],
                ['tag' => 'хештег №3-2', 'url' => '#'],
                ['tag' => 'хештег №3-3', 'url' => '#'],
                ['tag' => 'хештег №3-4', 'url' => '#'],
                ['tag' => 'хештег №3-5', 'url' => '#']]]]],

    ['/^\/works\/4\/.*$/', [
        'en' => [
            'url' => '/works/4',
            'title' => 'Lorem4 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #4',
            'navbarTitle' => 'Work #4',
            'description' => 'Lorem4 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem4 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/2WxRax5wvXc.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/2WxRax5wvXc.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #4-1', 'url' => '#'],
                ['tag' => 'hashtag #4-2', 'url' => '#'],
                ['tag' => 'hashtag #4-3', 'url' => '#'],
                ['tag' => 'hashtag #4-4', 'url' => '#'],
                ['tag' => 'hashtag #4-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/4',
            'title' => 'Лорем4 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №4',
            'navbarTitle' => 'Работа №4',
            'description' => 'Лорем4 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем4 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/2WxRax5wvXc.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/2WxRax5wvXc.jpg',
            'hashTags' => [
                ['tag' => 'хештег №4-1', 'url' => '#'],
                ['tag' => 'хештег №4-2', 'url' => '#'],
                ['tag' => 'хештег №4-3', 'url' => '#'],
                ['tag' => 'хештег №4-4', 'url' => '#'],
                ['tag' => 'хештег №4-5', 'url' => '#']]]]],

    ['/^\/works\/5\/.*$/', [
        'en' => [
            'url' => '/works/5',
            'title' => 'Lorem5 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #5',
            'navbarTitle' => 'Work #5',
            'description' => 'Lorem5 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem5 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/WGJUwa2TJT0.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/WGJUwa2TJT0.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #5-1', 'url' => '#'],
                ['tag' => 'hashtag #5-2', 'url' => '#'],
                ['tag' => 'hashtag #5-3', 'url' => '#'],
                ['tag' => 'hashtag #5-4', 'url' => '#'],
                ['tag' => 'hashtag #5-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/5',
            'title' => 'Лорем5 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №5',
            'navbarTitle' => 'Работа №5',
            'description' => 'Лорем5 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем5 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/WGJUwa2TJT0.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/WGJUwa2TJT0.jpg',
            'hashTags' => [
                ['tag' => 'хештег №5-1', 'url' => '#'],
                ['tag' => 'хештег №5-2', 'url' => '#'],
                ['tag' => 'хештег №5-3', 'url' => '#'],
                ['tag' => 'хештег №5-4', 'url' => '#'],
                ['tag' => 'хештег №5-5', 'url' => '#']]]]],

    ['/^\/works\/6\/.*$/', [
        'en' => [
            'url' => '/works/6',
            'title' => 'Lorem6 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #6',
            'navbarTitle' => 'Work #6',
            'description' => 'Lorem6 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem6 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/du0ufTM5FQs.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/du0ufTM5FQs.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #6-1', 'url' => '#'],
                ['tag' => 'hashtag #6-2', 'url' => '#'],
                ['tag' => 'hashtag #6-3', 'url' => '#'],
                ['tag' => 'hashtag #6-4', 'url' => '#'],
                ['tag' => 'hashtag #6-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/6',
            'title' => 'Лорем6 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №6',
            'navbarTitle' => 'Работа №6',
            'description' => 'Лорем6 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем6 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/du0ufTM5FQs.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/du0ufTM5FQs.jpg',
            'hashTags' => [
                ['tag' => 'хештег №6-1', 'url' => '#'],
                ['tag' => 'хештег №6-2', 'url' => '#'],
                ['tag' => 'хештег №6-3', 'url' => '#'],
                ['tag' => 'хештег №6-4', 'url' => '#'],
                ['tag' => 'хештег №6-5', 'url' => '#']]]]],

    ['/^\/works\/7\/.*$/', [
        'en' => [
            'url' => '/works/7',
            'title' => 'Lorem7 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #7',
            'navbarTitle' => 'Work #7',
            'description' => 'Lorem7 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem7 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/WBaCTiGrZeU.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/WBaCTiGrZeU.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #7-1', 'url' => '#'],
                ['tag' => 'hashtag #7-2', 'url' => '#'],
                ['tag' => 'hashtag #7-3', 'url' => '#'],
                ['tag' => 'hashtag #7-4', 'url' => '#'],
                ['tag' => 'hashtag #7-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/7',
            'title' => 'Лорем7 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №7',
            'navbarTitle' => 'Работа №7',
            'description' => 'Лорем7 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем7 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/WBaCTiGrZeU.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/WBaCTiGrZeU.jpg',
            'hashTags' => [
                ['tag' => 'хештег №7-1', 'url' => '#'],
                ['tag' => 'хештег №7-2', 'url' => '#'],
                ['tag' => 'хештег №7-3', 'url' => '#'],
                ['tag' => 'хештег №7-4', 'url' => '#'],
                ['tag' => 'хештег №7-5', 'url' => '#']]]]],

    ['/^\/works\/8\/.*$/', [
        'en' => [
            'url' => '/works/8',
            'title' => 'Lorem8 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #8',
            'navbarTitle' => 'Work #8',
            'description' => 'Lorem8 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem8 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/QgF764UVM44.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/QgF764UVM44.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #8-1', 'url' => '#'],
                ['tag' => 'hashtag #8-2', 'url' => '#'],
                ['tag' => 'hashtag #8-3', 'url' => '#'],
                ['tag' => 'hashtag #8-4', 'url' => '#'],
                ['tag' => 'hashtag #8-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/8',
            'title' => 'Лорем8 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №8',
            'navbarTitle' => 'Работа №8',
            'description' => 'Лорем8 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем8 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/QgF764UVM44.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/QgF764UVM44.jpg',
            'hashTags' => [
                ['tag' => 'хештег №8-1', 'url' => '#'],
                ['tag' => 'хештег №8-2', 'url' => '#'],
                ['tag' => 'хештег №8-3', 'url' => '#'],
                ['tag' => 'хештег №8-4', 'url' => '#'],
                ['tag' => 'хештег №8-5', 'url' => '#']]]]],

    ['/^\/works\/9\/.*$/', [
        'en' => [
            'url' => '/works/9',
            'title' => 'Lorem9 ipsum dolor sit amet, consectetur adipi-',
            'pageTitle' => 'Work #9',
            'navbarTitle' => 'Work #9',
            'description' => 'Lorem9 ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna<br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo',
            'posterDescription' => 'Lorem9 ipsum dolor<br>sit amet, consec-<br>tetur adipiscing<br>elit, sed do eius-<br>mod tempor incidi-<br>dunt ut labore',
            'videoFiles' => [
                ['src' => '/assets/img/videos/N2e1OTEkI6Y.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/N2e1OTEkI6Y.jpg',
            'hashTags' => [
                ['tag' => 'hashtag #9-1', 'url' => '#'],
                ['tag' => 'hashtag #9-2', 'url' => '#'],
                ['tag' => 'hashtag #9-3', 'url' => '#'],
                ['tag' => 'hashtag #9-4', 'url' => '#'],
                ['tag' => 'hashtag #9-5', 'url' => '#']]],
        'ru' => [
            'url' => '/works/9',
            'title' => 'Лорем9 ипсум долор сит амет, консектетур адипи-',
            'pageTitle' => 'Работа №9',
            'navbarTitle' => 'Работа №9',
            'description' => 'Лорем9 ипсум долор сит амет, консектетур адипишинг элит, сед<br>до эюзмод темпор инчидидунт ут лаборе эт долоре манья<br>аликуа. Ут эним ад миним веньям, куис ноструд эксерчитатьон<br>улламко лаборис низи ут аликуип экс эа коммодо',
            'posterDescription' => 'Лорем9 ипсум долор<br>сит амет, консек-<br>тетур адипишинг<br>элит, сед до эюз-<br>мод темпор инчиди-<br>дунт ут лаборе',
            'videoFiles' => [
                ['src' => '/assets/img/videos/N2e1OTEkI6Y.mp4', 'type' => 'video/mp4']],
            'posterImage' => '/assets/img/teasers/N2e1OTEkI6Y.jpg',
            'hashTags' => [
                ['tag' => 'хештег №9-1', 'url' => '#'],
                ['tag' => 'хештег №9-2', 'url' => '#'],
                ['tag' => 'хештег №9-3', 'url' => '#'],
                ['tag' => 'хештег №9-4', 'url' => '#'],
                ['tag' => 'хештег №9-5', 'url' => '#']]]]]];
