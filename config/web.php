<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 09.02.17
 * Time: 13:14
  * */
$db_local = require(__DIR__ . '/db-local.php');
$db_server = require(__DIR__ . '/db-server.php');

return [
    'id' => 'basic',
    'name' => 'yii2_base_template',
    'layout' => "@app/modules/main/views/layouts/main.php",
    //'layout' => "@app/modules/main/views/layouts/main.twig",
    'basePath' => realpath (__DIR__ . '/../'),
    'modules' => [
        'user' => [
            'class' => 'app\modules\user\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'main' => [
            'class' => 'app\modules\main\Module',
        ]
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => env('APP_COOKIE_VALIDATION_KEY'),
        ],
        'user' => [
            'class'=>'yii\web\User',
            'identityClass' => 'app\models\User',
            'loginUrl'=>['/user/sign-in/login'],
            'enableAutoLogin' => true,
            'as afterLogin' => 'app\behaviors\LoginTimestampBehavior'
        ],
        'errorHandler' => [
            'errorAction' => '/main/site/error',
        ],
        'db' => $db_local,
        //uncomment when use on hosting
        //'db' => $db_server,

    ]
];