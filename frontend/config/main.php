<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'vi',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        //
        //        'cache'=>[
        //            'class'=>'yii\caching\FileCache',
        //        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            // 'errorAction' => 'site/error',
        ],
        // 'assetManager' => [
        //     'forceCopy' => true,
        //     'linkAssets' => false,
        // ],
        //        'urlManagerBackend' => [
        //            'class' => 'yii\web\urlManager',
        //            'baseUrl' => 'http://cms.baohiemso.net/upload/',
        //            'enablePrettyUrl' => true,
        //            'showScriptName' => false,
        //        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // ['class' => 'yii\rest\UrlRule', 'controller' => 'Vnptpay'],
                '/hop-dong' => 'site/contract',
                '/ve-chung-toi'=>'site/about',
                '/goc-chuyen-gia'=>'/articles/list-articles',
                '/san-pham/<code:[\w-]+>'=>'/products/list-products',
                '/san-pham'=>'/products/list-products-all',
                '/boi-thuong'=>'offset/index',
            ],
        ],
    ],
    'params' => $params,
];