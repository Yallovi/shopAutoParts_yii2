<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FIO')->textInput(['maxlength' => true])->label('ФИО') ?>

    <?= $form->field($model, 'dateBrithday')->textInput()->label('Дата рождения') ?>

    <?= $form->field($model, 'salary')->textInput(['maxlength' => true])->label('Зарплата') ?>

    <?= $form->field($model, 'post')->textInput(['maxlength' => true])->label('Должность') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
