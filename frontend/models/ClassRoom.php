<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class ClassRoom extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'credits'], 'required'],
            [['name'], 'unique']
        ];
    }

    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id' => 'teacher_id'])->viaTable('class_room_teacher', ['class_room_id' => 'id']);
    }
}