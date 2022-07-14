<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[MiniGallery]].
 *
 * @see MiniGallery
 */
class MiniGalleryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MiniGallery[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MiniGallery|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
