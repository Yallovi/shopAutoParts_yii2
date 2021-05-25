<?php
use app\modules\admin\models\Store;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
$this->title = "Запрос 6";
?>

<section class="main">
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 100px">6.	Получить среднее число продаж на месяц по любому виду деталей. </h2>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'dateStart')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php echo $form -> field($model,  'dateEnd')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php //echo $form -> field($model,  'idDetails')->textInput(['type'=> 'text'])->label('ID детали')  ?>
            <?= $form->field($model, 'idDetails')->dropDownList(ArrayHelper::map(Store::find()->all(), 'id_autoDetalis', 'name_details'))->label('Наименование детали')?>

            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Id detail</th>
                    <th>Название детали</th>
                    <th>Среднее число продаж за месяц  (руб.)</th>
                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['id_detail'] ?></td>
                        <td><?= $request['name_details']?></td>
                        <td><?= $request['saleAmount']?> руб.</td>
                    </tr>
                <?php endforeach; ?>

                <?php print_r($request) ?>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

