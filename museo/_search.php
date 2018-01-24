<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MuseoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="museo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_museo') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'indirizzo') ?>

    <?= $form->field($model, 'apertura') ?>

    <?= $form->field($model, 'chiusura') ?>

    <?php // echo $form->field($model, 'descrizione') ?>

    <?php // echo $form->field($model, 'immagine') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
