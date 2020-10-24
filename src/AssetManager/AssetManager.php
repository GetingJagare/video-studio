<?php

namespace app\AssetManager;

/**
 * Class AssetManager
 */
class AssetManager
{

    /** @var string */
    public $route;

    const VERSION = '2.0.4';

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
                'image' => [
                    '/dist/img/back.jpg'
                ]
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

    /** @var string  */
    public $preload = "";

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

        $imageAssets = self::ASSETS_DATA[$this->route]['image'] ?? [];

        foreach ($cssAssets as $cssAsset) {

            $this->css .= "<link rel=\"stylesheet\" href=\"$cssAsset?v" . self::VERSION . "\" />";

        }

        foreach ($imageAssets as $imageAsset) {

            $this->preload .= "<link rel=\"preload\" href=\"$imageAsset\" as=\"image\" />";

        }

        foreach ($jsAssets as $jsAsset) {

            $this->js .= "<script src=\"$jsAsset?v" . self::VERSION . "\"></script>";

        }

    }

}
