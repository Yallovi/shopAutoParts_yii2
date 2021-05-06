<?php


namespace app\models;


use yii\db\ActiveRecord;

class store extends ActiveRecord
{
    public $dateStart = '2007-06-20';
    public $dateEnd = '2021-04-10';
    public $dateS = '2021-04-01';
    public $dateE = '2021-04-30';

    public function rules()
    {
       return [
           [['dateStart','dateEnd','dateS','dateE'], 'required'],
           [['dateStart','dateEnd'], 'date', 'format' => 'y-m-d'],
       ];
    }

}