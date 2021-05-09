<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clientsbase */

$this->title = 'Create Clientsbase';
$this->params['breadcrumbs'][] = ['label' => 'Clientsbases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientsbase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
