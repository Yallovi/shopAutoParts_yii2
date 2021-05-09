<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Cashstatement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashstatement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'sumStartDay')->textInput() ?>

    <?= $form->field($model, 'sumLastDay')->textInput() ?>

    <?= $form->field($model, 'idEmployee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
