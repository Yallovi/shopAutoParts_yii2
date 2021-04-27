<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 11";
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>


<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее количество товара</th>
        <th>Сумма товара</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['amount'] ?></td>
            <td><?= $request['saleAmount']?></td>
        </tr>
    <?php endforeach; ?>
</table>