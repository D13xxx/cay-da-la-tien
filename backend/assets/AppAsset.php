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
        'https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css',
        'theme/css/theme-default.css',
        'css/site.css?v=55',
    ];
    public $js = [
        'theme/js/plugins/jquery/jquery-ui.min.js',
        'theme/js/plugins/bootstrap/bootstrap.min.js',
        // 'theme/js/plugins/icheck/icheck.min.js',
        // 'theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js',
        // 'theme/js/plugins/scrolltotop/scrolltopcontrol.js',
        // 'theme/js/plugins/morris/raphael-min.js',
        // 'theme/js/plugins/morris/morris.min.js',
        // 'theme/js/plugins/rickshaw/d3.v3.js',
        // 'theme/js/plugins/rickshaw/rickshaw.min.js',
        // 'theme/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        // 'theme/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'theme/js/plugins/bootstrap/bootstrap-datepicker.js',
        // 'theme/js/plugins/owl/owl.carousel.min.js',
        'theme/js/plugins/moment.min.js',
        // 'theme/js/plugins/daterangepicker/daterangepicker.js',
        // 'theme/js/settings.js',
        // 'theme/js/plugins.js',
        // 'theme/js/actions.js',
        // 'theme/js/demo_dashboard.js',
        'theme/js/settings.js',
        'theme/js/plugins.js',
        'theme/js/actions.js',
        'js/app.js?v=3',
        
        // 'js/crop-products.js',
       
        'https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js',
        'https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js',
        'js/crop.js?v=1',
        'js/crop-parter.js?v=3',
        'js/jquery.timeago.js',
//        'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'
//        'https://code.jquery.com/jquery-3.4.1.js'
//         'theme/js/plugins/jquery/jquery.min.js'
//        'https://code.jquery.com/jquery-1.12.4.js"
//  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
//  crossorigin="anonymous"',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
