<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Teacher;
use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionSave()
    {
        $request = Yii::$app->request->post();
        $class_room = new Teacher();

        $class_room->attributes = $request;

        if(!$class_room->save())
        {
            $errors = $class_room->errors;
            return $this->render('create', ['errors' => $errors]);
        }

        return $this->redirect('/teacher');
    }
}