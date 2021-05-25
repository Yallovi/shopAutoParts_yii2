<?php
use app\modules\admin\models\Employees;
use app\modules\admin\models\Clientsbase;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dateOrder')->textInput()->label('Дата заказа') ?>

    <?= $form->field($model, 'id_employee')->dropDownList(ArrayHelper::map(Employees::find()->all(), 'idemployee', 'FIO'))->label('ФИО сотрудника')?>

<!--    --><?//= $form->field($model, 'id_employee')->textInput()->label('ID сотрудника') ?>

    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'surname'))->label('Отчество клиента')?>
    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'name'))->label('Имя клиента')?>
    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'lastName'))->label('Фамилия клиента')?>

<!--    --><?//= $form->field($model, 'id_client')->textInput()->label('ID клиента') ?>

    <?= $form->field($model, 'numberOrder')->textInput(['maxlength' => true])->label('Номер заказа') ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true])->label('Цена') ?>

    <?= $form->field($model, 'name_details')->textInput(['maxlength' => true])->label('Название детали') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
