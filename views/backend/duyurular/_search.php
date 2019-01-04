<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DuyurularSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyurular-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad') ?>

    <?= $form->field($model, 'soyad') ?>

    <?= $form->field($model, 'tarih') ?>

    <?= $form->field($model, 'konu') ?>

    <?php // echo $form->field($model, 'duyuru') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
