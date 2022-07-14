<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property string|null $unit
 * @property int $time_create
 * @property int|null $time_update
 *
 * @property RoomPhoto[] $roomPhones
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @return array[]
     */
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
            [['name', 'description', 'price'], 'required'],
            [['description'], 'string'],
            [['price', 'time_create', 'time_update'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название бани',
            'description' => 'Описание',
            'price' => 'Стоимость',
            'unit' => 'за что',
            'time_create' => 'Time Create',
            'time_update' => 'Time Update',
        ];
    }

    /**
     * Gets query for [[RoomPhones]].
     *
     * @return \yii\db\ActiveQuery|RoomPhotoQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(RoomPhoto::className(), ['id_room' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return RoomQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoomQuery(get_called_class());
    }
}
