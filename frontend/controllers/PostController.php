<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\helpers\Html;


class PostController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [

            ]
        ];
    }

    public function actionIndex()
    {
        return $this->renderContent(Html::tag('h2',
            'This is a test content'
        ));
    }

}
