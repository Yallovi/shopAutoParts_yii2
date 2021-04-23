<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 1";
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'nameDetails')->textInput(['type'=> 'text'])->label('ID детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число покупателей</th>
        <th>ID детали</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id_client'] ?></td>
            <td><?= $request['name_details']?></td>
        </tr>
    <?php endforeach; ?>
</table>
