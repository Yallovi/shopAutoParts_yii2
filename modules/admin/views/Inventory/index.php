<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\InventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Инвенторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="inventory-index">

    <h1>Инвенторизация</h1>

    <p>
        <?= Html::a('Добавить Инвенторизацию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inspectors_name',
            'dateStart',
            'dateEnd',
            'actualAmount',
            //'actualCost',
            //'accountingAmount',
            //'accountingCost',
            //'name_details',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
