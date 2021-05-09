<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `app\modules\admin\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOrder', 'id_employee', 'id_client'], 'integer'],
            [['dateOrder', 'numberOrder', 'price', 'name_details'], 'safe'],
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
        $query = Orders::find();

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
            'idOrder' => $this->idOrder,
            'dateOrder' => $this->dateOrder,
            'id_employee' => $this->id_employee,
            'id_client' => $this->id_client,
        ]);

        $query->andFilterWhere(['like', 'numberOrder', $this->numberOrder])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'name_details', $this->name_details]);

        return $dataProvider;
    }
}
