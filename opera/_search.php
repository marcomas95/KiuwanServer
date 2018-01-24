<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opera-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_opera') ?>

    <?= $form->field($model, 'titolo') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'autore') ?>

    <?= $form->field($model, 'descrizione') ?>

    <?php // echo $form->field($model, 'pubblico') ?>

    <?php // echo $form->field($model, 'id_museo') ?>

    <?php // echo $form->field($model, 'immagine') ?>

    <?php // echo $form->field($model, 'video') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
