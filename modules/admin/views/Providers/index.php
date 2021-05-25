<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\ProvidersSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Поставщики';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="providers-index">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Добавить Поставщика', ['create'], ['class' => 'btn btn-success']) ?>
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
                        ['attribute' => 'name','label' => 'Наименование поставщика'],
                        ['attribute' => 'address','label' => 'Адрес организации'],
                        ['attribute' => 'phone','label' => 'Телефон'],


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

