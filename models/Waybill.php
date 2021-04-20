<?php


namespace app\models;

use yii\db\ActiveRecord;


class Waybill extends ActiveRecord
{
    public $date_waybill = '2007-05-20';
    public $date_delivery;
    public $amount = '50';

    public function rules()
    {
        return [
            [['date_waybill'], 'date', 'format'  => 'yyyy-MM-dd'],
            [['amount'], 'required'],
        ];
    }
}