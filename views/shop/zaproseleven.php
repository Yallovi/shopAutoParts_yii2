<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 11";
?>
<section class="main">
    <div class="container">
        <div class="row">

            <h2 style="margin-top: 100px">11.	Получить перечень, общее количество и стоимость товара, реализованного за конкретный день. </h2>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>


            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Общее количество товара</th>
                    <th>Сумма товара</th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['amount'] ?></td>
                        <td><?= $request['saleAmount']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
