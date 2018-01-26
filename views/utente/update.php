<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Utente */

$this->title = 'Update Utente: ' . $model->id_utente;
$this->params['breadcrumbs'][] = ['label' => 'Utentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_utente, 'url' => ['view', 'id' => $model->id_utente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
