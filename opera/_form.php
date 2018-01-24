<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autore')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pubblico')->textInput() ?>

    <?= $form->field($model, 'id_museo')->textInput() ?>

    <?= $form->field($model, 'immagine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
