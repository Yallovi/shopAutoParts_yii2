<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title ='Запрос 2';
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'id_detalis')->textInput(['type'=> 'text'])->label('ID детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Id поставщика</th>
        <th>Дата Заказа</th>
        <th>Цена поставщика за шт.(руб)</th>
    </tr>
    <?php
    foreach ($req as $waybills): ?>
        <tr>
            <td><?= $waybills->id_providers ?></td>
            <td><?= $waybills->date_waybill ?></td>
            <td><?= $waybills->provider_price_piece ?></td>
        </tr>
    <?php endforeach; ?>
</table>