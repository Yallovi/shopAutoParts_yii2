<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Employees */

            $this->title = 'Редактировать сотрудника: ' . $model->idemployee;
            $this->params['breadcrumbs'][] = ['label' => 'Сотрудник', 'url' => ['index']];
            $this->params['breadcrumbs'][] = ['label' => $model->idemployee, 'url' => ['view', 'id' => $model->idemployee]];
            $this->params['breadcrumbs'][] = 'Редактировать';
            ?>
            <div style=" margin-top: 100px" class="employees-update">

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


