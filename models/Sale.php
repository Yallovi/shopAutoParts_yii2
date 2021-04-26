<?php


namespace app\models;


use yii\db\ActiveRecord;

class Sale extends ActiveRecord
{
    public $nameDetails = 'Рулевая';
    public $dateStart = '2021-04-10';
    public $dateEnd = '2021-06-10';
    public $idDetails;
    public $saleAmount;

    public function rules()
    {
        return [
          [['nameDetails','dateSale','dateEnd','idDetails'], 'required'],
          [['dateStart','dateEnd'], 'date', 'format' => 'y-m-d'],
//            [['idDetails'], 'required']
        ];
    }
}