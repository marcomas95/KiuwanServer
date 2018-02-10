<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UtenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestione Utenti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crea Utente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_utente',
            'username',
            //'password',
            'ruolo',
            //'id_museo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
