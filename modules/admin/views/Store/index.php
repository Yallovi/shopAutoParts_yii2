<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\StoreSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Склад';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="store-index">

                <h1>Склад</h1>

                <p>
                    <?= Html::a('Добавить информацию на склад', ['create'], ['class' => 'btn btn-success']) ?>
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

                        ['attribute' => 'id_autoDetalis','label' => 'ID детали'],
                        ['attribute' => 'amountDetalis','label' => 'Количество деталь'],
                        ['attribute' => 'store_price_piece','label' => 'Цена магазина за штуку'],
                        ['attribute' => 'name_details','label' => 'Название детали'],
                        ['attribute' => 'defectAmount','label' => 'Количетсво бракованных'],
                        ['attribute' => 'date_delivery','label' => 'Дата поставки'],
                        ['attribute' => 'cell_number','label' => 'Номер ячейки'],
                        ['attribute' => 'cell_size','label' => 'Размер ячейки'],

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

