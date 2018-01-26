<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MuseoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Museos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="museo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Museo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_museo',
            'nome',
            'indirizzo',
            'apertura',
            'chiusura',
            // 'descrizione',
            // 'immagine',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
