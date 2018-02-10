<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */
/* @var $form yii\widgets\ActiveForm */

?>
<?php
if (Yii::$app->getUser()->identity->ruolo == "operatore") {
    ?>


    <div class="opera-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'autore')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'proprietario')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'materiali')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tecnica')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'periodo_storico')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'dimensioni')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'peso')->textInput() ?>

        <?= $form->field($model, 'movimento_artistico')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'valore')->textInput() ?>

        <?= $form->field($model, 'restaurato')->dropDownList(['si' => "si", 'no' => "no"]) ?>

        <?= $form->field($model, 'pubblico')->dropDownList(['si' => "si", 'no' => "no"]) ?>

        <?= $form->field($model, 'immagine')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

        <?php
        $model->id_museo = Yii::$app->getUser()->identity->id_museo;
        ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>



<?php } else{ ?>

    <div class="opera-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'autore')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'descrizione')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'proprietario')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'materiali')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tecnica')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'periodo_storico')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'dimensioni')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'peso')->textInput() ?>

        <?= $form->field($model, 'movimento_artistico')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'valore')->textInput() ?>

        <?= $form->field($model, 'restaurato')->dropDownList(['si' => "si", 'no' => "no"]) ?>

        <?= $form->field($model, 'pubblico')->dropDownList(['si' => "si", 'no' => "no"]) ?>

        <?= $form->field($model, 'id_museo')->textInput() ?>

        <?= $form->field($model, 'immagine')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

<?php } ?>



