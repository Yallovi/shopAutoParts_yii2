<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Waybill */

            $this->title = 'Редактировть накладную: ' . $model->id;
            $this->params['breadcrumbs'][] = ['label' => 'Waybills', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
            $this->params['breadcrumbs'][] = 'Редактировть';
            ?>
            <div style=" margin-top: 100px" class="waybill-update">

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

