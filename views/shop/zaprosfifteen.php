<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 15";
?>

<table class="table table-bordered">
    <tr>
        <th>№ ячейки</th>
        <th>Сколько осталось мест для деталей</th>
    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['cell_number'] ?></td>
            <td><?= $request['amount'] ?></td>

        </tr>
    <?php endforeach; ?>

</table>
