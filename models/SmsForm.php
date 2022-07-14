<?php

namespace app\models;

class SmsForm extends \yii\base\Model
{
    public $name;
    public $phone;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            ['name', 'string', 'min' => 2],
            ['phone', 'string', 'min' => 11, 'max' => 30],
        ];
    }

    public function attributeLabels()
    {
        return [
            "name" => 'Имя',
            "phone" => 'Телефон'
        ];
    }
}