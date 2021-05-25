<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\EmployeesSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Сотрудники';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="employees-index">

                <h1>Сотрудники</h1>

                <p>
                    <?= Html::a('Добавить Сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
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

                        ['attribute' => 'idemployee','label' => 'ID сотрудника'],
                        ['attribute' => 'FIO','label' => 'ФИО'],
                        ['attribute' => 'dateBrithday','label' => 'Дата рождения'],
                        ['attribute' => 'salary','label' => 'Зарплата'],
                        ['attribute' => 'post','label' => 'Должность'],
//            'idemployee',
//            'FIO',
//            'dateBrithday',
//            'salary',
//            'post',

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


