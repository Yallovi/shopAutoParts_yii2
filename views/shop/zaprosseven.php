<?php
use app\modules\admin\models\Providers;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = "Запрос 7";
?>
<section class="main">
    <div class="container">
        <div class="row">

            <h2 style="margin-top: 100px">7.	Получить долю товара конкретного поставщика в процентах, деньгах, единицах от всего оборота магазина прибыль магазина за указанный период. </h2>
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form -> field($model,  'date_start')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php echo $form -> field($model,  'date_end')->textInput(['type'=> 'date'])->label('Дата Продажа')  ?>
            <?php //echo $form -> field($model,  'id_provider')->textInput(['type'=> 'text'])->label('ID провайдера')  ?>
            <?= $form->field($model, 'id_provider')->dropDownList(ArrayHelper::map(Providers::find()->all(), 'id', 'name'))->label('Наименование детали')?>

            <div class="form-group">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Наименование провайдера</th>
                    <th>Доля товара конкретного поставщика </th>

                </tr>
                <?php
                foreach ($req as $request): ?>
                    <tr>
                        <td><?= $request['name'] ?></td>
                        <td><?= $request['share_goods']?>%</td>
                    </tr>
                <?php endforeach; ?>
            </table>


            <?php print_r($request) ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
