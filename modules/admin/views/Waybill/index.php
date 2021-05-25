<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\WaybillSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Накладные';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="waybill-index">

                <h1>Накладные</h1>

                <p>
                    <?= Html::a('Добавить Накладную', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'rowOptions' => function($model, $key, $index, $column){
                        if($index % 2 == 0){
                            return ['style' => 'background-color:#000;'];
                        }
                    },
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        ['attribute' => 'id','label' => 'ID накладной'],
                        ['attribute' => 'date_waybill','label' => 'Дата заказа'],
                        ['attribute' => 'providers.name','label' => 'Наименование поставщика'],
                        ['attribute' => 'provider_price_piece','label' => 'Цена поставщика за штуку'],
                        ['attribute' => 'store.name_details','label' => 'Наименование детали'],
                        ['attribute' => 'amount','label' => 'Количество'],
                        ['attribute' => 'date_delivery','label' => 'Дата доставки'],
                        ['attribute' => 'waybill_cost','label' => 'Стоимость накладной'],


                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>


            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->


