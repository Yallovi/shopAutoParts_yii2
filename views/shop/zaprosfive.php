<?php
use yii\helpers\Html;
$this->title = "Запрос 5";
?>
<section class="main">
    <div class="container">
        <div class="row">
            <h1 style="margin-top: 100px">Топ продаваемых деталей</h1>
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
                    <th>Наименовании поставщиков</th>
                    <th>Цена деталей за штуку</th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['name'] ?></td>
                        <td><?= $request['provider_price_piece']?> руб.</td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
