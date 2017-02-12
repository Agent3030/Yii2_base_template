<?php

namespace app\modules\main\controllers;

use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
       // VarDumper::dump('Test main');
        return $this->render('index');
    }
}
