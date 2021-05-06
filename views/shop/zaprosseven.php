<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 7";
?>

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
        <th>№ провайдера</th>
        <th>Доля товара конкретного поставщика </th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id_providers'] ?></td>
            <td><?= $request['share_goods']?>%</td>
        </tr>
    <?php endforeach; ?>
</table>


<?php print_r($request) ?>
