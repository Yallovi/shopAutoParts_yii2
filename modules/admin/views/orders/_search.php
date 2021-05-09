<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOrder') ?>

    <?= $form->field($model, 'dateOrder') ?>

    <?= $form->field($model, 'id_employee') ?>

    <?= $form->field($model, 'id_client') ?>

    <?= $form->field($model, 'numberOrder') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'name_details') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
