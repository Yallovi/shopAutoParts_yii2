<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Waybill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="waybill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_waybill')->textInput() ?>

    <?= $form->field($model, 'id_providers')->textInput() ?>

    <?= $form->field($model, 'provider_price_piece')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_detalis')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'date_delivery')->textInput() ?>

    <?= $form->field($model, 'waybill_cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
