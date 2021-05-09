<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $idemployee
 * @property string $FIO
 * @property string $dateBrithday
 * @property string $salary
 * @property string $post
 *
 * @property Cashstatement[] $cashstatements
 * @property Orders[] $orders
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'dateBrithday', 'salary', 'post'], 'required'],
            [['dateBrithday'], 'safe'],
            [['FIO', 'post'], 'string', 'max' => 50],
            [['salary'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idemployee' => 'Idemployee',
            'FIO' => 'Fio',
            'dateBrithday' => 'Date Brithday',
            'salary' => 'Salary',
            'post' => 'Post',
        ];
    }

    /**
     * Gets query for [[Cashstatements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCashstatements()
    {
        return $this->hasMany(Cashstatement::className(), ['idEmployee' => 'idemployee']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_employee' => 'idemployee']);
    }
}
