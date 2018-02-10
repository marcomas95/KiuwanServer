<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OperaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestione Opere';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opera-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crea Opera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_opera',
            'titolo',
            'categoria',
            'autore',
            // 'proprietario',
            // 'materiali',
            // 'tecnica',
            // 'periodo_storico',
            // 'dimensioni',
            // 'peso',
            // 'movimento_artistico',
            // 'valore',
            // 'restaurato',
             'pubblico',
             // 'id_museo',
            'descrizione',
            // 'immagine',
            // 'video',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
