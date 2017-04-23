<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class ClassRoomTeacher extends ActiveRecord
{
    public function rules()
    {
        return [
            [['class_room_id', 'teacher_id', 'date', 'time'], 'required'],
        ];
    }

    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    public function getClassRoom()
    {
        return $this->hasOne(ClassRoom::className(), ['id' => 'class_room_id']);
    }
}