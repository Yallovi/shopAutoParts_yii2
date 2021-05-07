<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 12";
?>
<h2>кассовый отчет</h2>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'date_S')->textInput(['type'=> 'date'])->label('Дата Составления кассового отчета')  ?>
<?php echo $form -> field($model,  'date_E')->textInput(['type'=> 'date'])->label('Дата Составления кассового отчета')  ?>
<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>


<table class="table table-bordered">
    <tr>
        <th>№ кассового отчета</th>
        <th>Дата создания кассового отчета</th>
        <th>Сумма кассы в начале дня</th>
        <th>Сумма кассы в конце дня</th>
        <th>ФИО Кассира</th>


    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id'] ?></td>
            <td><?= $request['date'] ?></td>
            <td><?= $request['sumStartDay'] ?></td>
            <td><?= $request['sumLastDay'] ?></td>
            <td><?= $request['FIO'] ?></td>

        </tr>
    <?php endforeach; ?>
</table>
