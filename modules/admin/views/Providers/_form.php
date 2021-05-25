<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Providers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="providers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Наименование поставщика') ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label('Адрес организации') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Телефон') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
