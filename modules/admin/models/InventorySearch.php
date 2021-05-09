<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Inventory;

/**
 * InventorySearch represents the model behind the search form of `app\modules\admin\models\Inventory`.
 */
class InventorySearch extends Inventory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'actualAmount', 'accountingAmount'], 'integer'],
            [['inspectors_name', 'dateStart', 'dateEnd', 'name_details'], 'safe'],
            [['actualCost', 'accountingCost'], 'number'],
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
        $query = Inventory::find();

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
            'dateStart' => $this->dateStart,
            'dateEnd' => $this->dateEnd,
            'actualAmount' => $this->actualAmount,
            'actualCost' => $this->actualCost,
            'accountingAmount' => $this->accountingAmount,
            'accountingCost' => $this->accountingCost,
        ]);

        $query->andFilterWhere(['like', 'inspectors_name', $this->inspectors_name])
            ->andFilterWhere(['like', 'name_details', $this->name_details]);

        return $dataProvider;
    }
}
