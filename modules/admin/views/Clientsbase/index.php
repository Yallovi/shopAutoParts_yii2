<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\ClientsbaseSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Клиенты';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>

            <div class="clientsbase-index">

                <h1>Клиенты</h1>

                <p>
                    <?= Html::a('Добавить Клиента', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'id' => 'scan-batch-grid',
                    'dataProvider' => $dataProvider,
                    'rowOptions' => function($model, $key, $index, $column){
                        if($index % 2 == 0){
                            return ['style' => 'background-color:#000;'];
                        }
                    },
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        ['attribute' => 'id_client','label' => 'ID клиента'],
                        ['attribute' => 'surname','label' => 'Отчество'],
                        ['attribute' => 'name','label' => 'Имя'],
                        ['attribute' => 'lastName','label' => 'Фамилия'],
                        ['attribute' => 'phone','label' => 'Номер телефона'],
                        ['attribute' => 'car','label' => 'Машина'],
//            'id_client',
//            'surname',
//            'name',
//            'lastName',
//            'phone',
                        //'car',

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


