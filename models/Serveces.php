<?php

namespace app\models;

use Yii;

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
class Serveces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serveces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'time_create'], 'required'],
            [['description'], 'string'],
            [['price', 'in_cost', 'time_create', 'time_update'], 'integer'],
            [['name', 'url_photo'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'unit' => 'Unit',
            'in_cost' => 'In Cost',
            'url_photo' => 'Url Photo',
            'time_create' => 'Time Create',
            'time_update' => 'Time Update',
        ];
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
