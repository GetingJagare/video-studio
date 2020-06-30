<?php

namespace app\AssetManager;

/**
 * Class AssetManager
 */
class AssetManager
{

    /** @var string */
    public $route;

    const VERSION = '1.9';

    const VENDOR_ASSETS = [
        'css' => [
            '/dist/bundle/main.css'
        ],
        'js' => [
            '/dist/bundle/main.js',
        ]
    ];

    const ASSETS_DATA = [
            'main' => [
                'css' => [
                    '/dist/bundle/showreel.css',
                    '/dist/bundle/works.css',
                ],
                'js' => [
                    '/dist/bundle/showreel.js',
                    '/dist/bundle/works.js'
                ]
            ],
            'works' => [
                'css' => [
                    '/dist/bundle/works.css',
                ],
                'js' => [
                    '/dist/bundle/works.js'
                ]
            ],
            'about' => [
                'css' => [
                    '/dist/bundle/marquee.css'
                ],
                'js' => [
                    '/dist/bundle/marquee.js'
                ]
            ],
            'contacts' => [
                'css' => [
                    '/dist/bundle/marquee.css'
                ],
                'js' => [
                    '/dist/bundle/marquee.js'
                ],
            ],
            'work' => [
                'css' => [
                    '/dist/bundle/marquee.css',
                    '/dist/bundle/works.css',
                ],
                'js' => [
                    '/dist/bundle/work.js',
                    '/dist/bundle/marquee.js'
                ],
            ]
        ];

    /** @var string  */
    public $css = "";

    /** @var string  */
    public $js = "";

    public function run()
    {

        $cssAssets = array_merge(
            self::VENDOR_ASSETS['css'],
            isset(self::ASSETS_DATA[$this->route]['css']) ? self::ASSETS_DATA[$this->route]['css'] : []
        );

        $jsAssets = array_merge(
            self::VENDOR_ASSETS['js'],
            isset(self::ASSETS_DATA[$this->route]['js']) ? self::ASSETS_DATA[$this->route]['js'] : []
        );

        foreach ($cssAssets as $cssAsset) {

            $this->css .= "<link rel=\"stylesheet\" href=\"$cssAsset?v" . self::VERSION . "\" />";

        }

        foreach ($jsAssets as $jsAsset) {

            $this->css .= "<link rel=\"preload\" href=\"$jsAsset\" as=\"script\"/>";
            $this->js .= "<script src=\"$jsAsset?v" . self::VERSION . "\"></script>";

        }

    }

}