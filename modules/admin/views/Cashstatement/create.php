<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Cashstatement */

            $this->title = 'Добавить Кассовый отчет';
            $this->params['breadcrumbs'][] = ['label' => 'Cashstatements', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <div style="margin-top: 100px" class="cashstatement-create">

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
