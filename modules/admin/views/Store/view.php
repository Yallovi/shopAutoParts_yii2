<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Store */

            $this->title = $model->id_autoDetalis;
            $this->params['breadcrumbs'][] = ['label' => 'Склад', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="store-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id_autoDetalis], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id_autoDetalis], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        ['attribute' => 'id_autoDetalis','label' => 'ID детали'],
                        ['attribute' => 'amountDetalis','label' => 'Количество деталь'],
                        ['attribute' => 'store_price_piece','label' => 'Цена магазина за штуку'],
                        ['attribute' => 'name_details','label' => 'Название детали'],
                        ['attribute' => 'defectAmount','label' => 'Количетсво бракованных'],
                        ['attribute' => 'date_delivery','label' => 'Дата поставки'],
                        ['attribute' => 'cell_number','label' => 'Номер ячейки'],
                        ['attribute' => 'cell_size','label' => 'Размер ячейки'],
                    ],
                ]) ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

