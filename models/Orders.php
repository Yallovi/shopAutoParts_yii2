<?php


namespace app\models;


use yii\db\ActiveRecord;

class Orders extends  ActiveRecord
{
    public $nameDetails;

    public function rules()
    {
        return [
            [['nameDetails'], 'required'],
        ];
    }

}