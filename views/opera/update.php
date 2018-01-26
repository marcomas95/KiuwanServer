<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */

$this->title = 'Update Opera: ' . $model->id_opera;
$this->params['breadcrumbs'][] = ['label' => 'Operas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_opera, 'url' => ['view', 'id' => $model->id_opera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="opera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
