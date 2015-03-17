<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'instansi') ?>

    <?= $form->field($model, 'project') ?>

    <?php // echo $form->field($model, 'isi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'finished') ?>

    <?php // echo $form->field($model, 'canceled') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
