<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "cashstatement".
 *
 * @property int $id
 * @property string $date
 * @property float $sumStartDay
 * @property float $sumLastDay
 * @property int $idEmployee
 *
 * @property Employees $idEmployee0
 */
class Cashstatement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cashstatement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'sumStartDay', 'sumLastDay', 'idEmployee'], 'required'],
            [['date'], 'safe'],
            [['sumStartDay', 'sumLastDay'], 'number'],
            [['idEmployee'], 'integer'],
            [['idEmployee'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['idEmployee' => 'idemployee']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'sumStartDay' => 'Sum Start Day',
            'sumLastDay' => 'Sum Last Day',
            'idEmployee' => 'Id Employee',
        ];
    }

    /**
     * Gets query for [[IdEmployee0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmployee0()
    {
        return $this->hasOne(Employees::className(), ['idemployee' => 'idEmployee']);
    }
}
