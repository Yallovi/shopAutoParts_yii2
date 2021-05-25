<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Sale */

            $this->title = $model->id_sale;
            $this->params['breadcrumbs'][] = ['label' => 'Продажи', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="sale-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id_sale], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id_sale], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Выдействительно уверенны, что хотите удалить этот элемент?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        ['attribute' => 'id_sale','label' => 'ID продажи'],
                        ['attribute' => 'dateSale','label' => 'Дата продажи'],
                        ['attribute' => 'details.name_details','label' => 'Название детали'],
                        ['attribute' => 'amount','label' => 'Количество проданных деталей'],
                        ['attribute' => 'saleAmount','label' => 'Сумма продажи'],
                        ['attribute' => 'clients.surname','label' => 'Покупателей'],
                    ],
                ]) ?>

            </div>

        </div>
    </div>
</section>

