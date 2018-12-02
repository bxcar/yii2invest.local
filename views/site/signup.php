<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'phone')->passwordInput() ?>
    <div class="form-group">
        <div>
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>