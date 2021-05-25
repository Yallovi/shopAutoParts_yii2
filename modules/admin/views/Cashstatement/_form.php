<?php
use app\modules\admin\models\Employees;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Cashstatement */
/* @var $model app\modules\admin\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashstatement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата составления кассового отчета') ?>

    <?= $form->field($model, 'sumStartDay')->textInput()->label('Сумма в кассе в начале дня') ?>

    <?= $form->field($model, 'sumLastDay')->textInput()->label('Сумма в кассе в конце дня') ?>

    <?= $form->field($model, 'idEmployee')->dropDownList(ArrayHelper::map(Employees::find()->all(), 'idemployee', 'FIO'))->label('Сотрудник')?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
