<?php


namespace app\models;


use yii\db\ActiveRecord;

class Cashstatement extends ActiveRecord
{
    public $date_S;
    public $date_E;

    public function rules()
    {
        return [
            [['date_S','date_E'], 'required']
        ];
    }


}