<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\StoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Склад';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="store-index">

    <h1>Склад</h1>

    <p>
        <?= Html::a('Добавить информацию на склад', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_autoDetalis',
            'amountDetalis',
            'store_price_piece',
            'name_details',
            'defectAmount',
            //'date_delivery',
            //'cell_number',
            //'cell_size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
