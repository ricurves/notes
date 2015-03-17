<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'instansi')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'project')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'isi')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'finished')->textInput() ?>

    <?= $form->field($model, 'canceled')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
