<section class="main">
    <div class="container">
        <div class="row">

        </div>
        <!-- /.row -->
        <?php

        use yii\helpers\Html;
        use yii\grid\GridView;

        /* @var $this yii\web\View */
        /* @var $searchModel app\modules\admin\models\SaleSearch */
        /* @var $dataProvider yii\data\ActiveDataProvider */

        $this->title = 'Продажи';
        $this->params['breadcrumbs'][] = $this->title;
        ?>
        <button style=" margin-top: 100px" class="btn">
            <a class="btn" href="../admin" role="button">Админка</a>
        </button>
        <div class="sale-index">

            <h1>Продажи</h1>

            <p>
                <?= Html::a('Добавить Продажу', ['create'], ['class' => 'btn btn-success']) ?>
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

                    ['attribute' => 'id_sale','label' => 'ID продажи'],
                    ['attribute' => 'dateSale','label' => 'Дата продажи'],
                    ['attribute' => 'details.name_details','label' => 'Название детали'],
                    ['attribute' => 'amount','label' => 'Количество проданных деталей'],
                    ['attribute' => 'saleAmount','label' => 'Сумма продажи'],
                    ['attribute' => 'clients.surname','label' => 'Покупателей'],



                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>


        </div>

    </div>
    <!-- /.container -->
</section>
<!-- /.container -->

