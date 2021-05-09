<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "clientsbase".
 *
 * @property int $id_client
 * @property string $surname
 * @property string $name
 * @property string $lastName
 * @property string $phone
 * @property string $car
 *
 * @property Orders[] $orders
 * @property Sale[] $sales
 */
class Clientsbase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientsbase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'lastName', 'phone', 'car'], 'required'],
            [['surname', 'name', 'lastName', 'car'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_client' => 'Id Client',
            'surname' => 'Surname',
            'name' => 'Name',
            'lastName' => 'Last Name',
            'phone' => 'Phone',
            'car' => 'Car',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_client' => 'id_client']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['id_client' => 'id_client']);
    }
}
