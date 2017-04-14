<?php

namespace frontend\controllers;

use frontend\components\CustomFilter;
use yii\web\Controller;
use yii\helpers\Html;

class TestController extends Controller
{
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => CustomFilter::className()
//            ]
//        ];
//    }

    public function actionIndex()
    {
        return $this->renderContent(Html::tag('h2',
            'This is a test content'
        ));
    }

    public function actionNext()
    {
        return $this->renderContent(Html::tag('h2', 'Next action'));
    }

    public function actionSay($name = '')
    {
        if(!empty($name)){
            $message = 'Привет ' . $name;
        }else{
            $message = 'Привет гость';
        }

        return $this->render('say', ['message' => $message]);
    }
}
