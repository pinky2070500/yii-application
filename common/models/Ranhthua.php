<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ranhthua}}".
 *
 * @property int $gid
 * @property float|null $id
 * @property float|null $thuaid
 * @property string|null $xaid
 * @property float|null $shbando
 * @property float|null $shthua
 * @property float|null $dientich
 * @property float|null $dientichpl
 * @property string|null $maloaidat
 * @property string|null $khloaidat
 * @property string|null $diadanh
 * @property string|null $dtsd
 * @property string|null $tenchu
 * @property string|null $diachi
 * @property string|null $mdsd2003
 * @property string|null $kh2003
 * @property string|null $mscolor
 * @property string|null $shthuatam
 * @property string|null $dtthocu
 * @property float|null $dacapgcn
 * @property string|null $geom
 */
class Ranhthua extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ranhthua}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'thuaid', 'shbando', 'shthua', 'dientich', 'dientichpl', 'dacapgcn'], 'number'],
            [['geom'], 'string'],
            [['xaid', 'maloaidat', 'khloaidat', 'diadanh', 'dtsd', 'tenchu', 'diachi', 'mdsd2003', 'kh2003', 'mscolor', 'shthuatam', 'dtthocu'], 'string', 'max' => 254],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'Gid',
            'id' => 'ID',
            'thuaid' => 'Thuaid',
            'xaid' => 'Xaid',
            'shbando' => 'Shbando',
            'shthua' => 'Shthua',
            'dientich' => 'Dientich',
            'dientichpl' => 'Dientichpl',
            'maloaidat' => 'Maloaidat',
            'khloaidat' => 'Khloaidat',
            'diadanh' => 'Diadanh',
            'dtsd' => 'Dtsd',
            'tenchu' => 'Tenchu',
            'diachi' => 'Diachi',
            'mdsd2003' => 'Mdsd2003',
            'kh2003' => 'Kh2003',
            'mscolor' => 'Mscolor',
            'shthuatam' => 'Shthuatam',
            'dtthocu' => 'Dtthocu',
            'dacapgcn' => 'Dacapgcn',
            'geom' => 'Geom',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RanhthuaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RanhthuaQuery(get_called_class());
    }
}
