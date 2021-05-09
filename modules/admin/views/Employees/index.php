<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn" href="../index.php/admin" role="button">Админка</a>
<div class="employees-index">

    <h1>Сотрудники</h1>

    <p>
        <?= Html::a('Добавить Сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idemployee',
            'FIO',
            'dateBrithday',
            'salary',
            'post',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
