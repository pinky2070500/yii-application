<?php

namespace common\models;

use common\models\query\SoNganhQuery;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%so_nganh}}".
 *
 * @property int $so_id
 * @property string|null $diachi
 * @property string|null $dienthoai
 * @property string|null $website
 * @property string|null $fax
 * @property string|null $ten
 * @property string|null $geom
 * @property double|null $lat
 * @property double|null $lon
 */
class SoNganh extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%so_nganh}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diachi', 'dienthoai', 'website', 'fax', 'ten', 'geom'], 'string'],
            [['lat','lon'],'double'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'so_id' => 'So ID',
            'diachi' => 'Địa chỉ',
            'dienthoai' => 'Điện thoại',
            'website' => 'Website',
            'fax' => 'Fax',
            'ten' => 'Tên',
            'geom' => 'Geom',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SoNganhQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SoNganhQuery(get_called_class());
    }
}
