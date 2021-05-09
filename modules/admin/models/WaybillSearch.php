<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Waybill;

/**
 * WaybillSearch represents the model behind the search form of `app\modules\admin\models\Waybill`.
 */
class WaybillSearch extends Waybill
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_providers', 'id_detalis', 'amount'], 'integer'],
            [['date_waybill', 'provider_price_piece', 'date_delivery'], 'safe'],
            [['waybill_cost'], 'number'],
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
        $query = Waybill::find();

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
            'id' => $this->id,
            'date_waybill' => $this->date_waybill,
            'id_providers' => $this->id_providers,
            'id_detalis' => $this->id_detalis,
            'amount' => $this->amount,
            'date_delivery' => $this->date_delivery,
            'waybill_cost' => $this->waybill_cost,
        ]);

        $query->andFilterWhere(['like', 'provider_price_piece', $this->provider_price_piece]);

        return $dataProvider;
    }
}
