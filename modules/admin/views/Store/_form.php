<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Store */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_autoDetalis')->textInput()->label('ID запчасти') ?>

    <?= $form->field($model, 'amountDetalis')->textInput()->label('Количество деталей') ?>

    <?= $form->field($model, 'store_price_piece')->textInput(['maxlength' => true])->label('Цена магазина за штуку') ?>

    <?= $form->field($model, 'name_details')->textInput(['maxlength' => true])->label('Название детали') ?>

    <?= $form->field($model, 'defectAmount')->textInput()->label('Количество браконванных') ?>

    <?= $form->field($model, 'date_delivery')->textInput()->label('дата доставки') ?>

    <?= $form->field($model, 'cell_number')->textInput(['maxlength' => true])->label('Номер ячейки') ?>

    <?= $form->field($model, 'cell_size')->textInput()->label('Размер ячейки') ?>

    <div class="form-group">
        <?= Html::submitButton('сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
