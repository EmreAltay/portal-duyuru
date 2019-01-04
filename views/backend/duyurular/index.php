<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DuyurularSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duyurulars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurular-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Duyurular', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ad',
            'soyad',
            'tarih',
            'konu',
            'duyuru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
