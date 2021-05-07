<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = "Запрос 1"
?>

<h3>1.	Получить перечень и общее число поставщиков определенной категории, поставляющих указанный вид товара, либо поставивших указанный товар в объеме, не менее заданного за определенный период. </h3>
<br>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'date_w')->textInput(['type'=> 'date'])->label('Дата Заказа')  ?>
<?php echo $form -> field($model,  'date_d')->textInput(['type'=> 'date'])->label('Дата поставки')  ?>
<?php echo $form -> field($model,  'amount')->textInput(['type'=> 'text'])->label('Количество деталей')  ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число поставщиков</th>
        <th>Дата Заказа</th>
        <th>Дата Поставки</th>
    </tr>
    <?php
        foreach ($waybill as $waybills): ?>
            <tr>
                <td><?= $waybills->id_providers ?></td>
                <td><?= $waybills->date_waybill ?></td>
                <td><?= $waybills->date_delivery ?></td>
            </tr>
    <?php endforeach; ?>
</table>
<!-- /.table table-bordered -->
