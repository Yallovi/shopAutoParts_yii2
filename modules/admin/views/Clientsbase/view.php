<section  class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Clientsbase */

            $this->title = $model->name;
            $this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style="margin-top: 100px"  class="clientsbase-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id_client], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id_client], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить этот элемент?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,

                    'attributes' => [
                        ['attribute' => 'id_client','label' => 'ID клиента'],
                        ['attribute' => 'surname','label' => 'Отчество'],
                        ['attribute' => 'name','label' => 'Имя'],
                        ['attribute' => 'lastName','label' => 'Фамилия'],
                        ['attribute' => 'phone','label' => 'Номер телефона'],
                        ['attribute' => 'car','label' => 'Машина'],
                    ],
                ]) ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->

