<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CashstatementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Кассовый отчет';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="cashstatement-index">

    <h1>Кассовый отчет</h1>

    <p>
        <?= Html::a('Добавить Кассовый отчет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'sumStartDay',
            'sumLastDay',
            'idEmployee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
