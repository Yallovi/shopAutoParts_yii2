<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Store */

$this->title = 'Update Store: ' . $model->id_autoDetalis;
$this->params['breadcrumbs'][] = ['label' => 'Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_autoDetalis, 'url' => ['view', 'id' => $model->id_autoDetalis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="store-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>