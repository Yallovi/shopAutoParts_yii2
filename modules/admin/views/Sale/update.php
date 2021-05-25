<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Sale */

            $this->title = 'Редактировать Продажи: ' . $model->id_sale;
            $this->params['breadcrumbs'][] = ['label' => 'Продажи', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->id_sale, 'url' => ['view', 'id' => $model->id_sale]];
            $this->params['breadcrumbs'][] = 'Редактировать';
            ?>
            <div style=" margin-top: 100px" class="sale-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>

        </div>
    </div>
</section>

