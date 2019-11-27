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
        // 'theme/libs/ow/owl.carousel.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css',
        // 'theme/libs/ow/owl.theme.default.min.css',
        'theme/libs/Font-Awesome-v5.9.0-Pro/css/all.min.css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'theme/css/style.css?v=1'

    ];
    public $js = [
        'http://code.jquery.com/jquery-3.3.1.slim.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        'http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'theme/js/app.js?v=1',
        'theme/libs/ow/owl.carousel.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //        'yii\bootstrap\BootstrapAsset',
    ];
}
