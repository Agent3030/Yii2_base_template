<?php
/**
 * Require core files
 */
require_once(__DIR__ . '/../environment/helpers.php');

/**
 * Setting path aliases
 */

Yii::setAlias('@console', realpath(__DIR__.'/../console'));
Yii::setAlias('@storage', realpath(__DIR__.'/../storage'));
Yii::setAlias('@tests', realpath(__DIR__.'/../tests'));


/**
 * Setting url aliases
 */
Yii::setAlias('@frontendUrl', env('APP_URL'));
Yii::setAlias('@storageUrl', env('APP_URL').'storage/web');
