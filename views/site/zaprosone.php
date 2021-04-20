<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = "Запрос 1"
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'date_waybill')->textInput(['type'=> 'date'])->label('Дата Заказа')  ?>
<?php //echo $form -> field($model,  'date_delivery')->textInput(['type'=> 'date'])->label('Дата поставки')  ?>
<?php echo $form -> field($model,  'amount')->textInput(['type'=> 'text'])->label('Количество деталей')  ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число поставщиков</th>
        <th>Дата поставки</th>
    </tr>
    <?php
        foreach ($waybill as $waybills): ?>
            <tr>
                <td><?= $waybills->id_providers ?></td>
                <td><?= $waybills->date_waybill ?></td>
            </tr>
    <?php endforeach; ?>
</table>
<!-- /.table table-bordered -->
