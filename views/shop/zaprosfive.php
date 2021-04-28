<?php
use yii\helpers\Html;
$this->title = "Запрос 5";
?>
<h1>Топ продаваемых деталей</h1>
<table class="table table-bordered">
    <tr>
        <th>Название Детали</th>
        <th> Количество проданных деталей</th>

    </tr>
    <?php
    foreach ($model as $request): ?>
        <tr>
            <td><?= $request['name_details'] ?></td>
            <td><?= $request['amount']?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Топ самых дешевых поставщиков</h2>

<table class="table table-bordered">
    <tr>
        <th>Название Детали</th>
        <th> Количество проданных деталей</th>

    </tr>
    <?php
    foreach ($req as $request): ?>
        <tr>
            <td><?= $request['name'] ?></td>
            <td><?= $request['provider_price_piece']?></td>
        </tr>
    <?php endforeach; ?>
</table>