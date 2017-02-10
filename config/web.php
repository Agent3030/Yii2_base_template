<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 09.02.17
 * Time: 13:14
  * */


return [
    'id' => 'yii2-base-template',
    'basePath' => realpath (__DIR__ . '/../'),
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ]
]];