<section class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Cashstatement */

            $this->title = $model->id;
            $this->params['breadcrumbs'][] = ['label' => 'Cashstatements', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style="margin-top: 100px" class="cashstatement-view">

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
                        ['attribute' => 'id','label' => 'ID'],
                        ['attribute' => 'date','label' => 'Дата составления кассового отчета'],
                        ['attribute' => 'sumStartDay','label' => 'Сумма в кассе в начале дня'],
                        ['attribute' => 'sumLastDay','label' => 'Сумма в кассе в конце дня'],
                        ['attribute' => 'employees.FIO','label' => 'ФИО сотрудника'],

                    ],
                ]) ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main -->


