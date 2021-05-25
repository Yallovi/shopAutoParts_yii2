<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Store */

            $this->title = 'Редактировать информацию на складе: ' . $model->id_autoDetalis;
            $this->params['breadcrumbs'][] = ['label' => 'Склад', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->id_autoDetalis, 'url' => ['view', 'id' => $model->id_autoDetalis]];
            $this->params['breadcrumbs'][] = 'Редактировать';
            ?>
            <div style=" margin-top: 100px" class="store-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->


