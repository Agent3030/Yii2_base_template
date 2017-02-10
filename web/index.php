<?php
ini_set( 'display_errors', true);

//classes autoloader
require(__DIR__ . '/../vendor/autoload.php');

//environment
require(__DIR__ . '/../environment/env.php');

//yii base module
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

//yii app config
require(__DIR__ . '/../config/web.php');

//yii app run
(new yii\web\Application($config))->run();

