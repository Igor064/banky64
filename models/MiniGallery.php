<?php

namespace app\models;

use Faker\Core\Uuid;
use Yii;

/**
 * This is the model class for table "mini_gallery".
 *
 * @property int $id
 * @property string $url
 */
class MiniGallery extends \yii\db\ActiveRecord
{
    /** @var array */
    public $files;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mini_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['url'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10],
        ];
    }

    public function upload(){
        if($this->validate()){
            foreach ($this->url as $value){
                $nameFile = \Yii::getAlias("@app/www/uploads/") . Uuid::uuid3() . "_" . time() . "." .$value->extension;
                $value->saveAs($nameFile);
                $this->files[] = $nameFile;
            }
            return true;
        }else{
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Фото',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MiniGalleryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MiniGalleryQuery(get_called_class());
    }
}
