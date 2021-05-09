<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Sale;

/**
 * SaleSearch represents the model behind the search form of `app\modules\admin\models\Sale`.
 */
class SaleSearch extends Sale
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dateSale'], 'safe'],
            [['id_detail', 'amount', 'saleAmount', 'id_sale', 'id_client'], 'integer'],
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
        $query = Sale::find();

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
            'dateSale' => $this->dateSale,
            'id_detail' => $this->id_detail,
            'amount' => $this->amount,
            'saleAmount' => $this->saleAmount,
            'id_sale' => $this->id_sale,
            'id_client' => $this->id_client,
        ]);

        return $dataProvider;
    }
}
