<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurular */

$this->title = 'Create Duyurular';
$this->params['breadcrumbs'][] = ['label' => 'Duyurulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
