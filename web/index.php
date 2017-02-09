<?php
//yii base module
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

//yii app config
require(__DIR__ . '/../config/web.php');

//yii app run
(new yii\web\Application($config))->run();

