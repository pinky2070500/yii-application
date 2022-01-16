<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/ll/leaflet.css',
//        'css/ll/leaflet-search.css',
        'css/ll/leaflet.defaultextent.css',
        'css/ll/leaflet.groupedlayercontrol.css'
    ];
    public $js = [
//        'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js',
        'js/ll/leaflet.js',
        'js/ll/leaflet-providers.js',
//        'js/ll/leaflet.ajax.js',
//        'js/ll/leaflet-search.js',
        'js/ll/leaflet.defaultextent.js',
        'js/ll/leaflet.groupedlayercontrol.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
