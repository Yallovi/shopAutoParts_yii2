<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 14";
?>
<h2>Получить скорость оборота денежных средств, вложенных в товар (как товар быстро продается). </h2>

<?php $form = ActiveForm::begin(); ?>
<h3>Выберите месяц за который выхотите узнать товарооборот</h3>
<?php echo $form -> field($model,  'dateS')->textInput(['type'=> 'date'])->label('Дата начала месяца')  ?>
<?php echo $form -> field($model,  'dateE')->textInput(['type'=> 'date'])->label('Дата конец месяца')  ?>
<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>


<table class="table table-bordered">
    <tr>
        <th>Наименовании детали</th>
        <th>за сколько дней оборачивается запас товара</th>



    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['name_details'] ?></td>
            <td><?= $request['SaleDetail'] ?></td>


        </tr>
    <?php endforeach; ?>
</table>
