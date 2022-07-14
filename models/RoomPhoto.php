<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room_phone".
 *
 * @property int $id
 * @property int $id_room
 * @property string|null $url_phone
 *
 * @property Room $room
 */
class RoomPhoto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room_photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_room'], 'required'],
            [['id_room'], 'integer'],
            [['url_photo'], 'string', 'max' => 255],
            [['id_room'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['id_room' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_room' => 'Id Room',
            'url_photo' => 'Url Phone',
        ];
    }

    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery|RoomQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'id_room']);
    }

    /**
     * {@inheritdoc}
     * @return RoomPhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoomPhotoQuery(get_called_class());
    }
}
