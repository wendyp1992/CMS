<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public $sourcePath = '@bower/principal/';
    public $css = [
        'css/site.css',
        'css/materialize.min.css',
        'css/materialize.css',
    ];
    public $js = [
        'js/materialize.min.js',
        'js/materialize.js',
        'js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
