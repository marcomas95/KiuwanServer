<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */

$this->title = 'Aggiorna Opera: ' . $model->id_opera;
$this->params['breadcrumbs'][] = ['label' => 'Opere', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_opera, 'url' => ['view', 'id' => $model->id_opera]];
$this->params['breadcrumbs'][] = 'Aggiorna';
?>
<div class="opera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
