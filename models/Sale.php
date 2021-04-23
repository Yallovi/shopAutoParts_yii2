<?php


namespace app\models;


use yii\db\ActiveRecord;

class Sale extends ActiveRecord
{
    public $nameDetails;
    public $dateStart;
    public $dateEnd;

    public function rules()
    {
        return [
          [['nameDetails','dateSale','dateEnd'], 'required'],
          [['dateStart','dateEnd'], 'date', 'format' => 'y-m-d']
        ];
    }
}