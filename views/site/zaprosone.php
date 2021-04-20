<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = "Запрос 1"
?>

<?php $form = ActiveForm::begin(); ?>
<?php //echo $form -> field($model,  'id_detalis')->textInput()->label('id детали ')  ?>
<?php echo $form -> field($model,  'date_waybill')->textInput(['type'=> 'date'])->label('Дата поставки')  ?>
<?php //echo $form -> field($model,  'amount')->textInput(['number'=> 'date'])->label('Количество деталей')  ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число поставщиков</th>
        <th>Цена поставщика за штуку</th>
        <th>Деталь</th>
    </tr>
    <?php
        foreach ($waybill as $waybills): ?>
            <tr>
                <td><?= $waybills->id_providers ?></td>
                <td><?= $waybills->provider_price_piece ?></td>
                <td><?= $waybills->id_detalis ?></td>
            </tr>
    <?php endforeach; ?>
</table>
<!-- /.table table-bordered -->
