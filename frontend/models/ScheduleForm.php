<?php

namespace frontend\models;

class ScheduleForm
{
    public function getTeachers()
    {
        $teachers = Teacher::find()->all();
        return $teachers;
    }

    public function getClassRooms()
    {
        $class_rooms = ClassRoom::find()->all();
        return $class_rooms;
    }
}