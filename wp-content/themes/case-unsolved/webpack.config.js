const webpack = require('webpack')
const path = require('path')
const glob = require('glob-all')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const PurifyCSSPlugin = require('purifycss-webpack')
const StyleLintPlugin = require('stylelint-webpack-plugin')
const CleanWebpackPlugin = require('clean-webpack-plugin')
const ManifestPlugin = require('webpack-manifest-plugin')
const WorkboxPlugin = require('workbox-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const inProduction = process.env.NODE_ENV === 'production'

module.exports = {
    mode: process.env.NODE_ENV || 'development',

    entry: {
        main: ['./js/main.js', './scss/main.scss']
        // vendor: [] // uncomment and add vendor packages to create vendor bundle
    },

    output: {
        path: path.resolve(__dirname, './build'),
        filename: inProduction ? '[name].[chunkhash].js' : '[name].js'
    },

    devtool: 'source-map',

    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    {loader: 'css-loader', options: {minimize: process.env.NODE_ENV === 'production'}}, 'postcss-loader', 'sass-loader'
                ]
            },

            {
                test: /\.(eot|ttf|woff|woff2)$/,
                loaders: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'fonts/[name].[ext]'
                        }
                    }
                ]
            },

            {
                test: /\.(png|jpe?g|gif|svg)$/,
                loaders: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: inProduction
                                ? 'img/[name].[hash].[ext]'
                                : 'img/[name].[ext]'
                        }
                    },

                    'img-loader'
                ]
            },

            {
                test: /\.js$/,
                loader: 'eslint-loader',
                enforce: 'pre',
                exclude: /node_modules/
            },

            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                options: {
                    cacheDirectory: true
                }
            }

            // uncomment and add options to use modernizr
            // {
            //     loader: 'webpack-modernizr-loader',
            //     options: {},
            //     test: /modernizr\.js$/
            // }
        ]
    },

    // uncomment to use modernizr
    // resolve: {
    //     alias: {
    //         'modernizr': path.resolve(__dirname, 'modernizr.js')
    //     }
    // },

    plugins: [
        new CleanWebpackPlugin(['build'], {
            root: __dirname,
            verbose: true,
            dry: false
        }),

        new MiniCssExtractPlugin({
            filename: inProduction ? '[name].[hash].css' : '[name].css'
        }),

        // new PurifyCSSPlugin({
        //     paths: glob.sync([
        //         path.join(__dirname, '**/*.php'),
        //         path.join(__dirname, 'js/*.js')
        //     ]),
        //     minimize: inProduction
        // }),

        new StyleLintPlugin({
            files: ['scss/*.scss']
        }),

        new ManifestPlugin(),

        // uncomment to generate service worker
        // new WorkboxPlugin.GenerateSW(),

        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,
            proxy: 'localhost:8888',
            files: [
                path.join(__dirname, '**/*.php'),
                path.join(__dirname, 'build/*')
            ],
            open: false,
            notify: false
        })
    ]
}
