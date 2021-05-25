<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Employees */

            $this->title = $model->idemployee;
            $this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="employees-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->idemployee], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->idemployee], [
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
                        ['attribute' => 'idemployee','label' => 'ID сотрудника'],
                        ['attribute' => 'FIO','label' => 'ФИО'],
                        ['attribute' => 'dateBrithday','label' => 'Дата рождения'],
                        ['attribute' => 'salary','label' => 'Зарплата'],
                        ['attribute' => 'post','label' => 'Должность'],
                    ],
                ]) ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->



