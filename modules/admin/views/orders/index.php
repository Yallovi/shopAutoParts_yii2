<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Детали';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="orders-index">

    <h1>Детали</h1>

    <p>
        <?= Html::a('Добавить деталь', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idOrder',
            'dateOrder',
            'id_employee',
            'id_client',
            'numberOrder',
            //'price',
            //'name_details',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
