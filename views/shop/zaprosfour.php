<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 4";
?>

<table class="table table-bordered">
    <tr>
        <th>Количество деталей на складе</th>
        <th>№ ячейки</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request->amountDetalis ?></td>
            <td><?= $request->cell_number?></td>
        </tr>
    <?php endforeach; ?>
</table>
