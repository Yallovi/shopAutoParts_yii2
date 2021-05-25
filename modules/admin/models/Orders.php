<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $idOrder
 * @property string $dateOrder
 * @property int $id_employee
 * @property int $id_client
 * @property string $numberOrder
 * @property string $price
 * @property string $name_details
 * @property string $FIO
 * @property string $surname
 * @property string $name
 * @property string $lastname
 *
 * @property Detailsorder[] $detailsorders
 * @property Clientsbase $client
 * @property Employees $employee
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dateOrder', 'id_employee', 'id_client', 'numberOrder', 'price', 'name_details'], 'required'],
            [['dateOrder','FIO','surname','name','lastname'], 'safe'],
            [['id_employee', 'id_client'], 'integer'],
            [['numberOrder'], 'string', 'max' => 15],
            [['price', 'name_details'], 'string', 'max' => 30],
            [['id_client'], 'exist', 'skipOnError' => true, 'targetClass' => Clientsbase::className(), 'targetAttribute' => ['id_client' => 'id_client']],
            [['id_employee'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['id_employee' => 'idemployee']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idOrder' => 'Id Order',
            'dateOrder' => 'Date Order',
            'id_employee' => 'Id Employee',
            'id_client' => 'Id Client',
            'numberOrder' => 'Number Order',
            'price' => 'Price',
            'name_details' => 'Name Details',
        ];
    }

    /**
     * Gets query for [[Detailsorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsorders()
    {
        return $this->hasMany(Detailsorder::className(), ['id_Order' => 'idOrder']);
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasOne(Clientsbase::className(), ['id_client' => 'id_client']);
    }

    /**
     * Gets query for [[Employee]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasOne(Employees::className(), ['idemployee' => 'id_employee']);
    }
}
