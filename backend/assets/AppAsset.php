<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
        'js/main.js',
        'tinymce/tinymce.min.js',
                'js/easing.js',
        'js/jquery.corner.js',
        'js/jquery.min.js',
        'js/jquery.mixitup.min.js',
        'js/move-top.js',
        'js/owl.carousel.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
