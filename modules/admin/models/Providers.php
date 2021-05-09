<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "providers".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 *
 * @property Waybill[] $waybills
 */
class Providers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'providers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone'], 'required'],
            [['name', 'address'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Waybills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWaybills()
    {
        return $this->hasMany(Waybill::className(), ['id_providers' => 'id']);
    }
}
