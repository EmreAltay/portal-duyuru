<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurular */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyurular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarih')->textInput()  ?>

    <?= $form->field($model, 'konu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duyuru')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
