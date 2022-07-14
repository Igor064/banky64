<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "blacklist".
 *
 * @property int $id
 * @property string $number
 * @property string|null $comment
 * @property int|null $time_create
 */
class Blacklist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blacklist';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'time_create',
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
            [['number'], 'required'],
            [['comment'], 'string'],
            [['time_create'], 'integer'],
            [['number'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Номер телефона',
            'comment' => 'Причина',
            'time_create' => 'Time Create',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BlacklistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlacklistQuery(get_called_class());
    }
}
