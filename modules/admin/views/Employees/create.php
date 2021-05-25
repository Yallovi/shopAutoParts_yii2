<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Employees */

            $this->title = 'Добавить сотрудника';
            $this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <div style=" margin-top: 100px" class="employees-create">

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



