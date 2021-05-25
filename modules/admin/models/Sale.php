<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property string $dateSale
 * @property int $id_detail
 * @property int $amount
 * @property int $saleAmount
 * @property int $id_sale
 * @property int $id_client
 * @property float $name_details;
 * @property string $surname
 * @property string $name
 * @property string $lastname
 *
 *
 * @property Store $detail
 * @property Clientsbase $client
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dateSale', 'id_detail', 'amount', 'saleAmount', 'id_client'], 'required'],
            [['dateSale'.'name_details','surname','name','lastname'], 'safe'],
            [['id_detail', 'amount', 'saleAmount', 'id_client'], 'integer'],
            [['id_detail'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['id_detail' => 'id_autoDetalis']],
            [['id_client'], 'exist', 'skipOnError' => true, 'targetClass' => Clientsbase::className(), 'targetAttribute' => ['id_client' => 'id_client']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dateSale' => 'Date Sale',
            'id_detail' => 'Id Detail',
            'amount' => 'Amount',
            'saleAmount' => 'Sale Amount',
            'id_sale' => 'Id Sale',
            'id_client' => 'Id Client',
        ];
    }

    /**
     * Gets query for [[Detail]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetails()
    {
        return $this->hasOne(Store::className(), ['id_autoDetalis' => 'id_detail']);
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
}
