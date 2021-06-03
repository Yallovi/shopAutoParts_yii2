<?php


namespace app\models;


use yii\db\ActiveRecord;

class HeaderMenu extends ActiveRecord
{
    public static function tableName()
    {
        return 'headermenu';
    }
}