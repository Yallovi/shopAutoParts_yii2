<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ClientsbaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientsbase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_client') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'car') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
