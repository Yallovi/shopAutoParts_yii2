<?php
use app\modules\admin\models\Store;
use app\modules\admin\models\Clientsbase;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sale-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dateSale')->textInput()->label('Дата продажи') ?>


    <?= $form->field($model, 'id_detail')->dropDownList(ArrayHelper::map(Store::find()->all(), 'id_autoDetalis', 'name_details'))->label('Наименование детали')?>


<!--    --><?//= $form->field($model, 'id_detail')->textInput()->label('ID детали') ?>

    <?= $form->field($model, 'amount')->textInput()->label('Количетсв проданных деталей') ?>

    <?= $form->field($model, 'saleAmount')->textInput()->label('Сумма продажи') ?>

    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'surname'))->label('Отчество клиента')?>
    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'name'))->label('Имя клиента')?>
    <?= $form->field($model, 'id_client')->dropDownList(ArrayHelper::map(Clientsbase::find()->all(), 'id_client', 'lastName'))->label('Фамилия клиента')?>

<!--    --><?//= $form->field($model, 'id_client')->textInput()->label('ID клиента') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
