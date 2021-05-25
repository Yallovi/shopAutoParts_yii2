<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\CashstatementSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Кассовый отчет';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>

            <div class="cashstatement-index">

                <h1>Кассовый отчет</h1>

                <p>
                    <?= Html::a('Добавить Кассовый отчет', ['create'], ['class' => 'btn btn-success']) ?>
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

                        ['attribute' => 'id','label' => 'ID'],
                        ['attribute' => 'date','label' => 'Дата составления кассового отчета'],
                        ['attribute' => 'sumStartDay','label' => 'Сумма в кассе в начале дня'],
                        ['attribute' => 'sumLastDay','label' => 'Сумма в кассе в конце дня'],
                        ['attribute' => 'employees.FIO','label' => 'ФИО сотрудника'],

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


