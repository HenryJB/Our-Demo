<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'css/font-awesome.css',
        'css/jstarbox.css',
        'css/coreSlider.css',
        'css/flexslider.css',


    ];
    public $js = [
        'js/jquery.min.js',
        'js/main.js',
        'js/responsiveslides.min.js',
        'js/delslider.js',
        'js/bootstrap-3.1.1.min.js',
        'js/simpleCart.min.js',
        'js/jstarbox.js',
        'js/delstarbox.js',
        'js/coreSlider.js',
        'js/delcoreslider.js',

        // 'js/jquery.countdown.js',
        // 'js/jquery.flexisel.js',
        // 'js/jquery.flexslider.js',
        // 'js/jquery.magnific-popup.js',
        // 'js/jquery.wmuSlider.js',
        // 'js/delwmuslider.js',
        // 'js/script.js',
        // 'js/minicart.js',
        // 'js/delcart.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
