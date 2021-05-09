<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\WaybillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Накладные';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="waybill-index">

    <h1>Накладные</h1>

    <p>
        <?= Html::a('Добавить Накладную', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_waybill',
            'id_providers',
            'provider_price_piece',
            'id_detalis',
            //'amount',
            //'date_delivery',
            //'waybill_cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
