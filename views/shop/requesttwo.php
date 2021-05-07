<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title ='Запрос 2';
?>
<h2>2.	Получить сведения о конкретном виде деталей: какими поставщиками поставляется, их расценки, время поставки. </h2>
<br>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'id_detalis')->textInput(['type'=> 'text'])->label('ID детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Наименование поставщика</th>
        <th>Дата поставки</th>
        <th>Цена поставщика за шт.(руб)</th>
    </tr>
    <?php
    foreach ($req as $waybills): ?>
        <tr>
            <td><?= $waybills['name'] ?></td>
            <td><?= $waybills['date_delivery'] ?></td>
            <td><?= $waybills['provider_price_piece'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>