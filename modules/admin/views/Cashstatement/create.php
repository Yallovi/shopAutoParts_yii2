<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Cashstatement */

$this->title = 'Create Cashstatement';
$this->params['breadcrumbs'][] = ['label' => 'Cashstatements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashstatement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
