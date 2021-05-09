<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $id
 * @property string $inspectors_name
 * @property string $dateStart
 * @property string $dateEnd
 * @property int $actualAmount
 * @property float $actualCost
 * @property int $accountingAmount
 * @property float $accountingCost
 * @property string $name_details
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'inspectors_name', 'dateStart', 'dateEnd', 'actualAmount', 'actualCost', 'accountingAmount', 'accountingCost', 'name_details'], 'required'],
            [['id', 'actualAmount', 'accountingAmount'], 'integer'],
            [['dateStart', 'dateEnd'], 'safe'],
            [['actualCost', 'accountingCost'], 'number'],
            [['inspectors_name', 'name_details'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inspectors_name' => 'Inspectors Name',
            'dateStart' => 'Date Start',
            'dateEnd' => 'Date End',
            'actualAmount' => 'Actual Amount',
            'actualCost' => 'Actual Cost',
            'accountingAmount' => 'Accounting Amount',
            'accountingCost' => 'Accounting Cost',
            'name_details' => 'Name Details',
        ];
    }
}
