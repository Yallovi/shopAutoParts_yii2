<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 3";
?>
<h3>3.	Получить перечень и общее число покупателей, купивших указанный вид товара за некоторый период, либо сделавших покупку товара в объеме, не менее указанного</h3>
<br>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
<?php echo $form -> field($model,  'nameDetails')->textInput(['type'=> 'text'])->label('Названи детали')  ?>

<div class="form-group">
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<table class="table table-bordered">
    <tr>
        <th>Общее число покупателей</th>
        <th>Название детали</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id_client'] ?></td>
            <td><?= $request['name_details']?></td>
        </tr>
    <?php endforeach; ?>
</table>
