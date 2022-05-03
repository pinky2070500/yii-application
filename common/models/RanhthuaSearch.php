<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ranhthua;

/**
 * RanhthuaSearch represents the model behind the search form of `common\models\Ranhthua`.
 */
class RanhthuaSearch extends Ranhthua
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gid'], 'integer'],
            [['id', 'thuaid', 'shbando', 'shthua', 'dientich', 'dientichpl', 'dacapgcn'], 'number'],
            [['xaid', 'maloaidat', 'khloaidat', 'diadanh', 'dtsd', 'tenchu', 'diachi', 'mdsd2003', 'kh2003', 'mscolor', 'shthuatam', 'dtthocu', 'geom'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ranhthua::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'gid' => $this->gid,
            'id' => $this->id,
            'thuaid' => $this->thuaid,
            'shbando' => $this->shbando,
            'shthua' => $this->shthua,
            'dientich' => $this->dientich,
            'dientichpl' => $this->dientichpl,
            'dacapgcn' => $this->dacapgcn,
        ]);

        $query->andFilterWhere(['ilike', 'xaid', $this->xaid])
            ->andFilterWhere(['ilike', 'maloaidat', $this->maloaidat])
            ->andFilterWhere(['ilike', 'khloaidat', $this->khloaidat])
            ->andFilterWhere(['ilike', 'diadanh', $this->diadanh])
            ->andFilterWhere(['ilike', 'dtsd', $this->dtsd])
            ->andFilterWhere(['ilike', 'tenchu', $this->tenchu])
            ->andFilterWhere(['ilike', 'diachi', $this->diachi])
            ->andFilterWhere(['ilike', 'mdsd2003', $this->mdsd2003])
            ->andFilterWhere(['ilike', 'kh2003', $this->kh2003])
            ->andFilterWhere(['ilike', 'mscolor', $this->mscolor])
            ->andFilterWhere(['ilike', 'shthuatam', $this->shthuatam])
            ->andFilterWhere(['ilike', 'dtthocu', $this->dtthocu])
            ->andFilterWhere(['ilike', 'geom', $this->geom]);

        return $dataProvider;
    }
}
