<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Inventory */

            $this->title = 'Добавить отчет по инвентаризации';
            $this->params['breadcrumbs'][] = ['label' => 'Инветаризация', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <div style=" margin-top: 35px" class="inventory-create">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>

        </div>
    </div>
</section>


