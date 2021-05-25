<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Sale */

            $this->title = 'Добавить заказ';
            $this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <div style=" margin-top: 100px" class="sale-create">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>

        </div>
    </div>
</section>

