<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Teacher extends ActiveRecord
{
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email'], 'required'],
            [['email'], 'email'],
            [['email'], 'unique'],
        ];
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}