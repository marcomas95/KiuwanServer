<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */

$this->title = $model->id_opera;
$this->params['breadcrumbs'][] = ['label' => 'Operas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_opera], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_opera], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_opera',
            'titolo',
            'categoria',
            'autore',
            'descrizione',
            'pubblico',
            'id_museo',
            'immagine',
            'video',
        ],
    ]) ?>

</div>
