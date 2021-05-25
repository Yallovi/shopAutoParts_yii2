<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Inventory */

            $this->title = 'Редактировать отчет по инвентаризации: ' . $model->id;
            $this->params['breadcrumbs'][] = ['label' => 'Инвентаризация', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
            $this->params['breadcrumbs'][] = 'Редактировать';
            ?>
            <div style=" margin-top: 30px" class="inventory-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>

        </div>
    </div>
</section>

