<?php

namespace frontend\controllers;

use frontend\models\ClassRoom;
use yii\web\Controller;
use Yii;

class ClassRoomController extends Controller
{
    public function actionIndex()
    {
//        $class_rooms = ClassRoom::find()->all();
        $class_rooms = ClassRoom::find()->joinWith('teachers')->all();

        return $this->render('index', ['class_rooms' => $class_rooms]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionSave()
    {
        $request = Yii::$app->request->post();
        $class_room = new ClassRoom();

        $class_room->attributes = $request;

        if(! $class_room->save())
        {
            $errors = $class_room->errors;
            return $this->render('create', ['errors' => $errors]);
        }

        return $this->redirect('/class-room');
    }
}