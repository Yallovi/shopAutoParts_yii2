<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\grid\GridView;
$this->title = "Запрос 13";
?>
<section class="main">
    <div class="container">
        <div class="row">
            <h2 style="margin-top: 100px">Инвентаризационная ведомость </h2>

<!--            <table class="table table-bordered">-->
<!--                <tr>-->
<!--                    <th>№</th>-->
<!--                    <th>ФИО Инспектора</th>-->
<!--                    <th>Дата начала интвентаризации</th>-->
<!--                    <th>Дата конца интвентаризации</th>-->
<!--                    <th>Название детали</th>-->
<!--                    <th>Фактическое количество деталей</th>-->
<!--                    <th>Фактическая стоимость</th>-->
<!--                    <th>По данным бух.учета количество деталей</th>-->
<!--                    <th>По данным бух.учета стоимость</th>-->
<!---->
<!---->
<!--                </tr>-->
<!--                --><?php
//                foreach ($req as $request): ?>
<!--                    <tr>-->
<!--                        <td>--><?//= $request->id ?><!--</td>-->
<!--                        <td>--><?//= $request->inspectors_name ?><!--</td>-->
<!--                        <td>--><?//= $request->dateStart ?><!--</td>-->
<!--                        <td>--><?//= $request->dateEnd ?><!--</td>-->
<!--                        <td>--><?//= $request->name_details ?><!--</td>-->
<!--                        <td>--><?//= $request->actualAmount ?><!--</td>-->
<!--                        <td>--><?//= $request->actualCost ?><!--</td>-->
<!--                        <td>--><?//= $request->accountingAmount ?><!--</td>-->
<!--                        <td>--><?//= $request->accountingCost ?><!--</td>-->
<!---->
<!--                    </tr>-->
<!--                --><?php //endforeach; ?>
<!--            </table>-->

<!--            --><?//= LinkPager::widget([
//                'pagination' => $pagination,
//
//            ]); ?>

            <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'rowOptions' => function($model, $key, $index, $column){
                        if($index % 2 == 0){
                            return ['style' => 'background-color:#000;'];
                        }
                    },
                    'columns' => [
//                            'id',
//                            'inspectors_name',
//                            'dateStart',
//                            'dateEnd',
//                            'name_details',
//                            'actualAmount',
//                            'actualCost',
//                            'accountingAmount',
//                            'accountingCost'

                        ['attribute' => 'id','label' => 'ID'],
                        ['attribute' => 'inspectors_name','label' => 'ФИО инспектора'],
                        ['attribute' => 'dateStart','label' => 'Начало проверки'],
                        ['attribute' => 'dateEnd','label' => 'Конец проверки'],
                        ['attribute' => 'name_details','label' => 'Номер телефона'],
                        ['attribute' => 'actualAmount','label' => 'Количество по факту'],
                        ['attribute' => 'actualCost','label' => 'Сумма по факту'],
                        ['attribute' => 'accountingAmount','label' => 'Количество по бух.учету'],
                        ['attribute' => 'accountingCost','label' => 'Сумма по бух.учету'],
                    ]
            ]) ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
