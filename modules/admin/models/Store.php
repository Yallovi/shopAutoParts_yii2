<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property int $id_autoDetalis
 * @property int $amountDetalis
 * @property string $store_price_piece
 * @property string $name_details
 * @property int $defectAmount
 * @property string $date_delivery
 * @property string $cell_number
 * @property int $cell_size
 *
 * @property Detailsorder[] $detailsorders
 * @property Sale[] $sales
 * @property Waybill $autoDetalis
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amountDetalis', 'store_price_piece', 'name_details', 'defectAmount', 'date_delivery', 'cell_number', 'cell_size'], 'required'],
            [['amountDetalis', 'defectAmount', 'cell_size'], 'integer'],
            [['date_delivery'], 'safe'],
            [['store_price_piece', 'name_details'], 'string', 'max' => 30],
            [['cell_number'], 'string', 'max' => 10],
            [['id_autoDetalis'], 'exist', 'skipOnError' => true, 'targetClass' => Waybill::className(), 'targetAttribute' => ['id_autoDetalis' => 'id_detalis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_autoDetalis' => 'Id Auto Detalis',
            'amountDetalis' => 'Amount Detalis',
            'store_price_piece' => 'Store Price Piece',
            'name_details' => 'Name Details',
            'defectAmount' => 'Defect Amount',
            'date_delivery' => 'Date Delivery',
            'cell_number' => 'Cell Number',
            'cell_size' => 'Cell Size',
        ];
    }

    /**
     * Gets query for [[Detailsorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsorders()
    {
        return $this->hasMany(Detailsorder::className(), ['id__details' => 'id_autoDetalis']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['id_detail' => 'id_autoDetalis']);
    }

    /**
     * Gets query for [[AutoDetalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoDetalis()
    {
        return $this->hasOne(Waybill::className(), ['id_detalis' => 'id_autoDetalis']);
    }
}
