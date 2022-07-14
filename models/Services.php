<?php

namespace app\models;

use Faker\Core\Uuid;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "serveces".
 *
 * @property int $id ID
 * @property string $name
 * @property string $description
 * @property int $price
 * @property string|null $unit
 * @property int $in_cost
 * @property string|null $url_photo
 * @property int $time_create
 * @property int|null $time_update
 */
class Services extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'time_create',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'time_update',
                ],
                'value' => function () {
                    return time();
                },
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['price', 'in_cost', 'time_create', 'time_update'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 100],
            [['url_photo'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'description' => 'Описание',
            'price' => 'Цена',
            'unit' => 'за что',
            'in_cost' => 'Спец. банер.',
            'url_photo' => 'Фотография',
            'time_create' => 'Time Create',
            'time_update' => 'Time Update',
        ];
    }


    public function upload(){
        if($this->validate()){
            $this->file = \Yii::getAlias("@app/www/uploads/") . Uuid::uuid3() . "_" . time() . "." .$this->url_photo->extension;
            $this->url_photo->saveAs($this->file);
            return true;
        }else{
            return false;
        }
    }

    /**
     * {@inheritdoc}
     * @return ServecesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServecesQuery(get_called_class());
    }
}
