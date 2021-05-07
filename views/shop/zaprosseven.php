<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 7";
?>
<h2>7.	Получить долю товара конкретного поставщика в процентах, деньгах, единицах от всего оборота магазина прибыль магазина за указанный период. </h2>
<br>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'date_start')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'date_end')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'id_provider')->textInput(['type'=> 'text'])->label('ID провайдера')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Наименование провайдера</th>
        <th>Доля товара конкретного поставщика </th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['name'] ?></td>
            <td><?= $request['share_goods']?>%</td>
        </tr>
    <?php endforeach; ?>
</table>


<?php print_r($request) ?>
