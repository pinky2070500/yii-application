<?php

namespace backend\assets;

use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

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
        'css/ll/Leaflet.PolylineMeasure.css',
        'css/ll/leaflet.groupedlayercontrol.css',
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css',
    ];
    public $js = [
//        'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js',
        'js/ll/leaflet.js',
        'js/ll/leaflet-providers.js',
//        'js/ll/leaflet.ajax.js',
//        'js/ll/leaflet-search.js',
        'js/ll/leaflet.defaultextent.js',
        'js/ll/Leaflet.PolylineMeasure.js',
        'js/ll/leaflet.groupedlayercontrol.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        JqueryAsset::class,
        BootstrapPluginAsset::class,
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
