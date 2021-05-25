<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 4";
?>
<section class="main">
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 100px"> 4.Получить перечень, объем и номер ячейки для всех деталей, хранящихся на складе</h2>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>№ ячейки</th>
                    <th>Объем ячейки. Сколько может вместить деталей (шт.)</th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request->cell_number ?></td>
                        <td><?= $request->cell_size?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
