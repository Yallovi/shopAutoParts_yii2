<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'inspectors_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateStart')->textInput() ?>

    <?= $form->field($model, 'dateEnd')->textInput() ?>

    <?= $form->field($model, 'actualAmount')->textInput() ?>

    <?= $form->field($model, 'actualCost')->textInput() ?>

    <?= $form->field($model, 'accountingAmount')->textInput() ?>

    <?= $form->field($model, 'accountingCost')->textInput() ?>

    <?= $form->field($model, 'name_details')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
