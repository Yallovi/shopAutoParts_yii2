<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use app\modules\admin\models\Clientsbase;
            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\OrdersSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Заказы';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="orders-index">

                <h1>Заказы</h1>

                <p>
                    <?= Html::a('Добавить Заказ', ['create'], ['class' => 'btn btn-success']) ?>
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

                        ['attribute' => 'idOrder','label' => 'ID заказа'],
                        ['attribute' => 'dateOrder','label' => 'Дата заказа'],
                        ['attribute' => 'employees.FIO','label' => 'ФИО сотрудника'],
                        ['attribute' => 'clients.surname','label' => 'Фамилия клиента'],
                        ['attribute' => 'clients.name','label' => 'Имя клиента'],
                        ['attribute' => 'clients.lastName','label' => 'Отчетсво клиента'],
                        ['attribute' => 'numberOrder','label' => 'Номер заказа'],
                        ['attribute' => 'price','label' => 'Цена'],
                        ['attribute' => 'name_details','label' => 'Название детали'],

//            'idOrder',
//            'dateOrder',
//            'id_employee',
//            'id_client',
//            'numberOrder',
                        //'price',
                        //'name_details',

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
