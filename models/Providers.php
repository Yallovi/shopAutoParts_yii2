<?php


namespace app\models;
use yii\db\activeRecord;


class providers extends  activeRecord
{
    public static function  tableName()
    {
        return 'providers';
    }
    public function getAllProviders()
    {
        $providers = Providers::find()->all();
        return $providers;
    }
}