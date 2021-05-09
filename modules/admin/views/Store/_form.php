<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Store */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_autoDetalis')->textInput() ?>

    <?= $form->field($model, 'amountDetalis')->textInput() ?>

    <?= $form->field($model, 'store_price_piece')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'defectAmount')->textInput() ?>

    <?= $form->field($model, 'date_delivery')->textInput() ?>

    <?= $form->field($model, 'cell_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_size')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
