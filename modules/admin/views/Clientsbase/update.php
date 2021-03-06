<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Clientsbase */

            $this->title = 'Редактировать клиента: ' . $model->name;
            $this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_client]];
            $this->params['breadcrumbs'][] = 'Редактировать';
            ?>
            <div style="margin-top: 100px" class="clientsbase-update">

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

