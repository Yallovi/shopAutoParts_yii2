<?php


namespace app\models;

use yii\db\ActiveRecord;


class Waybill extends ActiveRecord
{
    public $date_w  = '2007-05-20';
    public $date_d = '2007-06-20';
    public $amount ;
    public $id_detalis;

    public function rules()
    {
        return [
            [['amount'], 'required'],
            [['date_w', 'date_d'],'date', 'format'  => 'y-m-d', ],

           [['id_detalis'],'required'],

        ];
    }
}