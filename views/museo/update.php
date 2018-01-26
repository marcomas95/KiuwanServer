<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Museo */

$this->title = 'Update Museo: ' . $model->id_museo;
$this->params['breadcrumbs'][] = ['label' => 'Museos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_museo, 'url' => ['view', 'id' => $model->id_museo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="museo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
