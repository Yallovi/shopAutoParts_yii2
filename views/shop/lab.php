<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 6";
?>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'idDetails')->textInput(['type'=> 'text'])->label('ID детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Id detail</th>
        <th>Название детали</th>
        <th>Количество  продажи</th>
    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id_detail'] ?></td>
            <td><?= $request['name_details']?></td>
            <td><?= $request['saleAmount']?></td>
        </tr>
    <?php endforeach; ?>

    <?php print_r($request) ?>
</table>


