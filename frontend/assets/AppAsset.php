<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
//  public $sourcePath = '@bower/principal/';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
        'js/easing.js',
        'js/jquery.corner.js',
        'js/jquery.min.js',
        'js/jquery.mixitup.min.js',
        'js/move-top.js',
        'js/owl.carousel.js',
        'js/wow.min.js',
        'js/main.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
