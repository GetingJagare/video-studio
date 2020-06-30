const glob = require('glob-all');
const path = require('path');
const miniCssWebpackPlugin = require('mini-css-extract-plugin');
const uglifyJsWebpackPlugin = require('uglifyjs-webpack-plugin');
const optimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const PurgecssPlugin = require('purgecss-webpack-plugin');

function cssWhiteList() {
    return [/is-active/, /show/, /marquee/, /showreel/, /non-active/, /work-name/, /about/, /footer/, /contacts/];
}

module.exports = {
    entry: {
        main: './assets/js/main.js',
        marquee: './assets/js/marquee.js',
        showreel: './assets/js/showreel.js',
        works: './assets/js/works.js',
        work: './assets/js/work.js',
    },
    output: {
        path: path.resolve(__dirname, 'dist/bundle'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/env'],
                    }
                }
            },
            {
                test: /\.(sass|scss)$/,
                use: [
                    {
                        loader: miniCssWebpackPlugin.loader
                    },
                    {
                        loader: 'css-loader',
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: true,
                        }
                    }
                ]
            },
            {
                test: /\.css$/,
                use: [
                    {
                        loader: 'css-loader',
                    },
                    {
                        loader: 'style-loader',
                    }
                ]
            },
            {
                test: /\.(png|jpe?g|gif|svg)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: '../img',
                            //emitFile: false
                        }
                    }
                ]
            },
            {
                test: /\.(woff2?|ttf|eot|otf)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: '../fonts'
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new miniCssWebpackPlugin({
            filename: '[name].css',
            chunkFilename: '[name].css'
        }),
        new PurgecssPlugin({
            paths: glob.sync(['./views/**/*.php']),
            whitelistPatterns: cssWhiteList(),
        }),
    ],
    optimization: {
        minimizer: [
            new uglifyJsWebpackPlugin({
                uglifyOptions: {
                    output: {
                        comments: false,
                    },
                },
            }),
            new optimizeCSSAssetsPlugin({
                cssProcessorPluginOptions: {
                    preset: ['default', { discardComments: { removeAll: true } }],
                },
            })
        ]
    }
};