<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Opera */

$this->title = 'Crea Opera';
$this->params['breadcrumbs'][] = ['label' => 'Operas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
