<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 16";
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'nameDetails')->textInput(['type'=> 'text'])->label('Названи детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число заказов</th>
        <th> Общая сумма заказа</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['idOrder'] ?></td>
            <td><?= $request['price']?></td>
        </tr>
    <?php endforeach; ?>
</table>