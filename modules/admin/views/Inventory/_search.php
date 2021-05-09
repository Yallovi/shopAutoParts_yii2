<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\InventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inspectors_name') ?>

    <?= $form->field($model, 'dateStart') ?>

    <?= $form->field($model, 'dateEnd') ?>

    <?= $form->field($model, 'actualAmount') ?>

    <?php // echo $form->field($model, 'actualCost') ?>

    <?php // echo $form->field($model, 'accountingAmount') ?>

    <?php // echo $form->field($model, 'accountingCost') ?>

    <?php // echo $form->field($model, 'name_details') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
