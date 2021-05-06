<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 8";
?>
<h2>Получить накладные расходы в процентах от объема продаж. </h2>

<table class="table table-bordered">
    <tr>
        <th>№ накладной </th>
        <th>Накладные расходы в процентах </th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['id'] ?></td>
            <td><?= $request['overheads'] ?>%</td>
        </tr>
    <?php endforeach; ?>
</table>
