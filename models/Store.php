<?php


namespace app\models;


use yii\db\ActiveRecord;

class store extends ActiveRecord
{
    public $dateStart = '2007-06-20';

    public function rules()
    {
       return [
           [['dateStart'], 'required'],
           [['dateStart'], 'date', 'format' => 'y-m-d'],
       ];
    }

}