<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WaybillSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="waybill-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_waybill') ?>

    <?= $form->field($model, 'id_providers') ?>

    <?= $form->field($model, 'provider_price_piece') ?>

    <?= $form->field($model, 'id_detalis') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'date_delivery') ?>

    <?php // echo $form->field($model, 'waybill_cost') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
