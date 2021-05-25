<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;
            use yii\grid\GridView;

            /* @var $this yii\web\View */
            /* @var $searchModel app\modules\admin\models\InventorySearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Инвенторизация';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <button style=" margin-top: 100px" class="btn">
                <a class="btn" href="../admin" role="button">Админка</a>
            </button>
            <div class="inventory-index">

                <h1>Инвенторизация</h1>

                <p>
                    <?= Html::a('Добавить Инвенторизацию', ['create'], ['class' => 'btn btn-success']) ?>
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
                        ['attribute' => 'inspectors_name','label' => 'ФИО инспектора'],
                        ['attribute' => 'dateStart','label' => 'дата начала проверки'],
                        ['attribute' => 'dateEnd','label' => 'дата конец проверки'],
                        ['attribute' => 'actualAmount','label' => 'Количество в настоящее время'],
                        ['attribute' => 'actualCost','label' => 'Сумма в настоящее время'],
                        ['attribute' => 'accountingAmount','label' => 'Количество по бух учету'],
                        ['attribute' => 'accountingCost','label' => 'Сумма по бух учету'],
                        ['attribute' => 'name_details','label' => 'Название детали'],

//            'id',
//            'inspectors_name',
//            'dateStart',
//            'dateEnd',
//            'actualAmount',
//            'actualCost',
//            'accountingAmount',
//            'accountingCost',
//            'name_details',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>


            </div>

        </div>
    </div>
</section>

