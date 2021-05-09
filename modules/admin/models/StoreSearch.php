<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Store;

/**
 * StoreSearch represents the model behind the search form of `app\modules\admin\models\Store`.
 */
class StoreSearch extends Store
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_autoDetalis', 'amountDetalis', 'defectAmount', 'cell_size'], 'integer'],
            [['store_price_piece', 'name_details', 'date_delivery', 'cell_number'], 'safe'],
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
        $query = Store::find();

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
            'id_autoDetalis' => $this->id_autoDetalis,
            'amountDetalis' => $this->amountDetalis,
            'defectAmount' => $this->defectAmount,
            'date_delivery' => $this->date_delivery,
            'cell_size' => $this->cell_size,
        ]);

        $query->andFilterWhere(['like', 'store_price_piece', $this->store_price_piece])
            ->andFilterWhere(['like', 'name_details', $this->name_details])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number]);

        return $dataProvider;
    }
}
