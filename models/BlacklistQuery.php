<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Blacklist]].
 *
 * @see Blacklist
 */
class BlacklistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Blacklist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Blacklist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
