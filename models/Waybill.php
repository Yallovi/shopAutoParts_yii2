<?php


namespace app\models;

use yii\db\ActiveRecord;


class Waybill extends ActiveRecord
{
    public $date_w  = '2007-05-20';
    public $date_d = '2007-06-20';
    public $amount = '50';
    public $id_detalis;
    public $id_provider ;
    public $date_start  = '2021-04-10';
    public $date_end  = '2021-04-20';

    public function rules()
    {
        return [
            [['amount'], 'required'],
            [['date_w', 'date_d'],'date', 'format'  => 'y-m-d' ],
            [['id_detalis'],'required'],
            [['id_provider'], 'required'],

        ];
    }
}