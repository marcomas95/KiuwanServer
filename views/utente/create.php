<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Utente */

$this->title = 'Crea Utente';
$this->params['breadcrumbs'][] = ['label' => 'Utenti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utente-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
