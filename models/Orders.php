<?php


namespace app\models;


use yii\db\ActiveRecord;

class Orders extends  ActiveRecord
{
    public $nameDetails = 'Рулевая тяга';

    public function rules()
    {
        return [
            [['nameDetails'], 'required'],
        ];
    }

}