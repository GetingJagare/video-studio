<?php

namespace app\AssetManager;

/**
 * Class AssetManager
 */
class AssetManager
{

    /** @var string */
    public $route;

    const VENDOR_ASSETS = [
        'css' => [
            '/assets/css/bootstrap-4.4.1/bootstrap.min.css',
        ],
        'js' => [
            '/assets/js/jquery-3.4.1/jquery-3.4.1.min.js',
            '/assets/js/bootstrap-4.4.1/bootstrap.bundle.min.js'
        ]
    ];

    const ASSETS_DATA = [
            'main' => [
                'css' => [
                    '/assets/css/plyr-3.5.10/plyr.css',
                    '/assets/css/styles.css',
                    '/assets/css/showreel.css',
                    '/assets/css/works.css',
                ],
                'js' => [
                    '/assets/js/plyr-3.5.10/plyr.min.js',
                    '/assets/js/showreel.js',
                    '/assets/js/works.js'
                ]
            ],
            'works' => [
                'css' => [
                    '/assets/css/plyr-3.5.10/plyr.css',
                    '/assets/css/styles.css',
                    '/assets/css/works.css',
                ],
                'js' => [
                    '/assets/js/plyr-3.5.10/plyr.min.js',
                    '/assets/js/works.js'
                ]
            ],
            'about' => [
                'css' => [
                    '/assets/css/styles.css',
                    '/assets/css/marquee.css'
                ],
                'js' => [
                    '/assets/js/marquee.js'
                ]
            ],
            'contacts' => [
                'js' => [
                    '/assets/js/marquee.js'
                ],
                'css' => [
                    '/assets/css/styles.css',
                    '/assets/css/marquee.css'
                ]
            ],
            'work' => [
                'js' => [
                    '/assets/js/plyr-3.5.10/plyr.min.js',
                    '/assets/js/work.js',
                    '/assets/js/marquee.js'
                ],
                'css' => [
                    '/assets/css/plyr-3.5.10/plyr.css',
                    '/assets/css/styles.css',
                    '/assets/css/marquee.css'
                ]
            ]
        ];

    const MOBILE_ASSETS = [
        'css' => [
            '/assets/css/mobile.css',
        ],
        'js' => []
    ];

    /** @var string  */
    public $css = "";

    /** @var string  */
    public $js = "";

    public function run()
    {

        $cssAssets = array_merge(
            self::VENDOR_ASSETS['css'],
            isset(self::ASSETS_DATA[$this->route]['css']) ? self::ASSETS_DATA[$this->route]['css'] : [],
            self::MOBILE_ASSETS['css']
        );

        $jsAssets = array_merge(
            self::VENDOR_ASSETS['js'],
            isset(self::ASSETS_DATA[$this->route]['js']) ? self::ASSETS_DATA[$this->route]['js'] : [],
            self::MOBILE_ASSETS['js']
        );

        foreach ($cssAssets as $cssAsset) {

            $this->css .= "<link rel=\"stylesheet\" href=\"$cssAsset\" />";

        }

        foreach ($jsAssets as $jsAsset) {

            $this->js .= "<script src=\"$jsAsset\"></script>";

        }

    }

}