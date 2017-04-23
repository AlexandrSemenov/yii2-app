<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ClassRoomTeacher;
use frontend\models\ScheduleForm;
use yii\web\Controller;

class ScheduleController extends Controller
{
    public function actionIndex()
    {
        $schedule = ClassRoomTeacher::find()
            ->innerJoin('teacher', '`teacher`.`id` = `class_room_teacher`.`teacher_id`')
            ->with('teacher')
            ->innerJoin('class_room', '`class_room`.`id` = `class_room_teacher`.`class_room_id`')
            ->with('classRoom')
            ->all();

        return $this->render('index', ['schedule' => $schedule]);
    }

    public function actionGridView()
    {
        $schedule = ClassRoomTeacher::find()
            ->joinWith('teacher')
            ->joinWith('classRoom');

        return $this->render('grid', ['schedule' => $schedule]);
    }

    public function actionCreate()
    {
        $schedule_form = new ScheduleForm();
        $class_room_teacher = new ClassRoomTeacher();

        return $this->render('create', ['schedule_form' => $schedule_form, 'class_room_teacher' => $class_room_teacher]);
    }

    public function actionSave()
    {
        $request = Yii::$app->request->post();
        $class_room_teacher = new ClassRoomTeacher();

        $class_room_teacher->attributes = $request;

        if(!$class_room_teacher->save())
        {
            $errors = $class_room_teacher->errors;
            return $this->render('create', ['errors' => $errors]);
        }

        return $this->redirect('/schedule/grid-view');
    }
}