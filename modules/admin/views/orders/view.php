<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Orders */

            $this->title = $model->idOrder;
            $this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="orders-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->idOrder], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->idOrder], [
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
                        ['attribute' => 'idOrder','label' => 'ID заказа'],
                        ['attribute' => 'dateOrder','label' => 'Дата заказа'],
                        ['attribute' => 'employees.FIO','label' => 'ФИО сотрудника'],
                        ['attribute' => 'clients.surname','label' => 'Фамилия клиента'],
                        ['attribute' => 'clients.name','label' => 'Имя клиента'],
                        ['attribute' => 'clients.lastName','label' => 'Отчетсво клиента'],
                        ['attribute' => 'numberOrder','label' => 'Номер заказа'],
                        ['attribute' => 'price','label' => 'Цена'],
                        ['attribute' => 'name_details','label' => 'Название детали'],
                    ],
                ]) ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

