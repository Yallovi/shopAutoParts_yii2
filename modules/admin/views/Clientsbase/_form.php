<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clientsbase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientsbase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true])->label('Фамилия') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя')?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ->label('Отчество')?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Номер телефона') ?>

    <?= $form->field($model, 'car')->textInput(['maxlength' => true])->label('Машина') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
