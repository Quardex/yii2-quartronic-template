<?php
namespace console\controllers;

class QuartronicController extends \yii\console\Controller
{
    public function actionIndex($route)
    {
        \Yii::$app->quartronic->run([
            'route'=>$route,
            'mode'=>'console',
            'returnRender'=>false,
            'requireAuth'=>false
        ]);
    }

}
