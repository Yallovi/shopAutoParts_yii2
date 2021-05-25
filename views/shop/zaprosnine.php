<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 9";
?>
<section class="main">
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 100px">Получить перечень и общее количество непроданного товара на складе за определенный период (залежалого) и его объем от общего товара в процентах. </h2>
            <br><br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>

            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Название детали</th>
                    <th>общее количество непроданного товара на складе</th>
                    <th>объем от общего товара в процентах</th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['name_details'] ?></td>
                        <td><?= $request['remainder_details']?> шт.</td>
                        <td><?= $request['size_total']?>%</td>
                    </tr>
                <?php endforeach; ?>
            </table>


            <?php print_r($request) ?>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
