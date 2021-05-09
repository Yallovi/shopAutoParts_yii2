<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "waybill".
 *
 * @property int $id
 * @property string $date_waybill
 * @property int $id_providers
 * @property string $provider_price_piece
 * @property int $id_detalis
 * @property int $amount
 * @property string $date_delivery
 * @property float $waybill_cost
 *
 * @property Store $store
 * @property Providers $providers
 */
class Waybill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waybill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_waybill', 'id_providers', 'provider_price_piece', 'id_detalis', 'amount', 'date_delivery', 'waybill_cost'], 'required'],
            [['date_waybill', 'date_delivery'], 'safe'],
            [['id_providers', 'id_detalis', 'amount'], 'integer'],
            [['waybill_cost'], 'number'],
            [['provider_price_piece'], 'string', 'max' => 30],
            [['id_providers'], 'exist', 'skipOnError' => true, 'targetClass' => Providers::className(), 'targetAttribute' => ['id_providers' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_waybill' => 'Date Waybill',
            'id_providers' => 'Id Providers',
            'provider_price_piece' => 'Provider Price Piece',
            'id_detalis' => 'Id Detalis',
            'amount' => 'Amount',
            'date_delivery' => 'Date Delivery',
            'waybill_cost' => 'Waybill Cost',
        ];
    }

    /**
     * Gets query for [[Store]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::className(), ['id_autoDetalis' => 'id_detalis']);
    }

    /**
     * Gets query for [[Providers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProviders()
    {
        return $this->hasOne(Providers::className(), ['id' => 'id_providers']);
    }
}
