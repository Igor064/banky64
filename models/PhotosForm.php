<?php

namespace app\models;

use Faker\Core\Uuid;

class PhotosForm extends \yii\base\Model
{
    public $files;
    public $dir_files;

    public function rules()
    {
        return [
            [['files'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10],
        ];
    }

    public function attributeLabels()
    {
        return [
            'files' => 'Фотографии',
        ];
    }

    public function upload(){
        if($this->validate()){
            foreach ($this->files as $value){
                $nameFile = \Yii::getAlias("@app/www/uploads/") . Uuid::uuid3() . "_" . time() . "." .$value->extension;
                $value->saveAs($nameFile);
                $this->dir_files[] = $nameFile;
            }
            return true;
        }else{
            return false;
        }
    }
}