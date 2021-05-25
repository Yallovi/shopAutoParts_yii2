<section class="main">
    <div class="container">
        <div class="row">

            <?php

            use yii\helpers\Html;
            use yii\widgets\DetailView;

            /* @var $this yii\web\View */
            /* @var $model app\modules\admin\models\Inventory */

            $this->title = $model->id;
            $this->params['breadcrumbs'][] = ['label' => 'Inventories', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title;
            \yii\web\YiiAsset::register($this);
            ?>
            <div style=" margin-top: 100px" class="inventory-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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

                        ['attribute' => 'id','label' => 'ID'],
                        ['attribute' => 'inspectors_name','label' => 'ФИО инспектора'],
                        ['attribute' => 'dateStart','label' => 'дата начала проверки'],
                        ['attribute' => 'dateEnd','label' => 'дата конец проверки'],
                        ['attribute' => 'actualAmount','label' => 'Количество в настоящее время'],
                        ['attribute' => 'actualCost','label' => 'Сумма в настоящее время'],
                        ['attribute' => 'accountingAmount','label' => 'Количество по бух учету'],
                        ['attribute' => 'accountingCost','label' => 'Сумма по бух учету'],
                        ['attribute' => 'name_details','label' => 'Название детали'],
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</section>

