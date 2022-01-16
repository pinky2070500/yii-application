<?php

namespace common\models\query;

use common\models\SoNganh;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the ActiveQuery class for [[\common\models\SoNganh]].
 *
 * @see \common\models\SoNganh
 */
class SoNganhQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SoNganh[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return array|ActiveRecord|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function byKeyword($keyword)
    {
        return $this -> andWhere("where ten like :keyword".['ten'=>$keyword]);
    }
}
