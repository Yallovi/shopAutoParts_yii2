<?php

use app\modules\admin\models\Providers;
use app\modules\admin\models\Store;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Waybill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="waybill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_waybill')->textInput()->label('Дата заказа') ?>

    <?= $form->field($model, 'id_providers')->dropDownList(ArrayHelper::map(Providers::find()->all(), 'id', 'name'))->label('Поставщик')?>

<!--    --><?//= $form->field($model, 'id_providers')->textInput()->label('ID поставщика ') ?>

    <?= $form->field($model, 'provider_price_piece')->textInput(['maxlength' => true])->label('Цена поставщика за штуку') ?>

<!--    Нельзя редактировать-->
    <?= $form->field($model, 'id_detalis')->dropDownList(ArrayHelper::map(Store::find()->all(), 'id_autoDetalis', 'name_details'))->label('Наименование детали')?>

<!--    --><?//= $form->field($model, 'id_detalis')->textInput()->label('ID детали') ?>

    <?= $form->field($model, 'amount')->textInput()->label('Количество') ?>

    <?= $form->field($model, 'date_delivery')->textInput()->label('Дата доставки') ?>

    <?= $form->field($model, 'waybill_cost')->textInput()->label('Стоимость накладной') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
