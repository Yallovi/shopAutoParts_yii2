<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 13";
?>
<section class="main">
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 100px">Инвентаризационная ведомость </h2>

            <table class="table table-bordered">
                <tr>
                    <th>№</th>
                    <th>ФИО Инспектора</th>
                    <th>Дата начала интвентаризации</th>
                    <th>Дата конца интвентаризации</th>
                    <th>Название детали</th>
                    <th>Фактическое количество деталей</th>
                    <th>Фактическая стоимость</th>
                    <th>По данным бух.учета количество деталей</th>
                    <th>По данным бух.учета стоимость</th>


                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['id'] ?></td>
                        <td><?= $request['inspectors_name'] ?></td>
                        <td><?= $request['dateStart'] ?></td>
                        <td><?= $request['dateEnd'] ?></td>
                        <td><?= $request['name_details'] ?></td>
                        <td><?= $request['actualAmount'] ?></td>
                        <td><?= $request['actualCost'] ?></td>
                        <td><?= $request['accountingAmount'] ?></td>
                        <td><?= $request['accountingCost'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
