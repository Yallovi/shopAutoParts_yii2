<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput()->label('ID') ?>

    <?= $form->field($model, 'inspectors_name')->textInput(['maxlength' => true])->label('ФИО инспектора') ?>

    <?= $form->field($model, 'dateStart')->textInput()->label('дата начала проверки') ?>

    <?= $form->field($model, 'dateEnd')->textInput() ->label('дата конец проверки')?>

    <?= $form->field($model, 'actualAmount')->textInput()->label('Количество в настоящее время') ?>

    <?= $form->field($model, 'actualCost')->textInput()->label('Сумма в настоящее время') ?>

    <?= $form->field($model, 'accountingAmount')->textInput() ->label('Количество по бух учету')?>

    <?= $form->field($model, 'accountingCost')->textInput() ->label('Сумма по бух учету')?>

    <?= $form->field($model, 'name_details')->textInput(['maxlength' => true]) ->label('Название детали')?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
