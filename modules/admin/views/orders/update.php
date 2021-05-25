<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Orders */

            $this->title = 'Редактировать Заказ: ' . $model->idOrder;
            $this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->idOrder, 'url' => ['view', 'id' => $model->idOrder]];
            $this->params['breadcrumbs'][] = 'Update';
            ?>
            <div  style=" margin-top: 100px" class="orders-update">

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

