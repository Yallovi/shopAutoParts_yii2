<div class="main">
    <div class="container">
        <div class="row">
            <?php

            use yii\helpers\Html;
            use yii\bootstrap\ActiveForm;
            ?>
            <div style="margin-top: 100px"></div>
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'username')->label('Придумайте логин') ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Придумайте пароль') ?>
            <div class="form-group">
                <div>
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>

