<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Запрос 10";
?>
<section class="main">
    <div class="container">
        <div class="row">

            <h2 style="margin-top: 100px">10.Получить перечень и общее количество бракованного товара, пришедшего за определенный период и список поставщиков, поставивших товар. </h2>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php //echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php //echo $form -> field($model,  'nameDetails')->textInput(['type'=> 'text'])->label('Названи детали')  ?>

            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Общее число бракованных</th>
                    <th>Название детали</th>
                    <th>ID провайдера</th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['defectAmount'] ?></td>
                        <td><?= $request['name_details'] ?></td>
                        <td><?= $request['name']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
