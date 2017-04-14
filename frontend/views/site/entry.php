<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<div class="form-group">
    <?= $form->field($model, 'name')->label('Ваше имя') ?>
</div>

<div class="form-group">
    <?= $form->field($model, 'email')->label('Ваш Email') ?>
</div>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>