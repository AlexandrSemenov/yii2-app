<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
        ];
    }
}