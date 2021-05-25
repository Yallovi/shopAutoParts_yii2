<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = "Запрос 1"
?>

<section class="main">
    <div class="container">
        <div class="row">
            <h3 style="margin-top: 100px">1.	Получить перечень и общее число поставщиков определенной категории, поставляющих указанный вид товара, либо поставивших указанный товар в объеме, не менее заданного за определенный период. </h3>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'date_w')->textInput(['type'=> 'date'])->label('Дата Заказа')  ?>
            <?php echo $form -> field($model,  'date_d')->textInput(['type'=> 'date'])->label('Дата поставки')  ?>
            <?php echo $form -> field($model,  'amount')->textInput(['type'=> 'text'])->label('Количество деталей')  ?>

            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>



            <table style="background-color: #0f0f0f" class="table table-bordered table-dark">
                <tr>
                    <th>Общее число поставщиков</th>
                    <th>Дата Заказа</th>
                    <th>Дата Поставки</th>
                </tr>
                <?php
                foreach ($waybill as $waybills): ?>
                    <tr>
                        <td><?= $waybills->id_providers ?></td>
                        <td><?= $waybills->date_waybill ?></td>
                        <td><?= $waybills->date_delivery ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <!-- /.table table-bordered -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</section>
<!-- /.main -->

