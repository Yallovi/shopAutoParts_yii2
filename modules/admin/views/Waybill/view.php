<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Waybill */

            $this->title = $model->id;
            $this->params['breadcrumbs'][] = ['label' => 'Накладные', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="waybill-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        ['attribute' => 'id','label' => 'ID накладной'],
                        ['attribute' => 'date_waybill','label' => 'Дата заказа'],
                        ['attribute' => 'providers.name','label' => 'Наименование поставщика'],
                        ['attribute' => 'provider_price_piece','label' => 'Цена поставщика за штуку'],
                        ['attribute' => 'store.name_details','label' => 'Наименование детали'],
                        ['attribute' => 'amount','label' => 'Количество'],
                        ['attribute' => 'date_delivery','label' => 'Дата доставки'],
                        ['attribute' => 'waybill_cost','label' => 'Стоимость накладной'],
                    ],
                ]) ?>

            </div>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

