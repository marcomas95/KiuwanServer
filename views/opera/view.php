<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Opera */

$this->title = 'Gestione Opera';
$this->params['breadcrumbs'][] = ['label' => 'Opere', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_opera], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_opera], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_opera',
            'titolo',
            'categoria',
            'autore',
            'descrizione',
            'proprietario',
            'materiali',
            'tecnica',
            'periodo_storico',
            'dimensioni',
            'peso',
            'movimento_artistico',
            'valore',
            'restaurato',
            'pubblico',
            'id_museo',
            'immagine',
            'video',
        ],
    ]) ?>

</div>
<?php
$dimensione=200;
$livello_codifica=1;
$margine=1;
$url= $model->id_opera;
?>

<td>
    <tr><center><img src="http://chart.apis.google.com/chart?chs=<?php echo $dimensione ?>x<?php echo $dimensione ?>&cht=qr&chld=<?php echo $livello_codifica ?>|<?php echo $margine ?>&chl=<?php echo $url ?>"></center></tr>
    <tr><center><a class="mybut btn btn-primary btn-mini" href="http://chart.apis.google.com/chart?chs=<?php echo $dimensione ?>x<?php echo $dimensione ?>&cht=qr&chld=<?php echo $livello_codifica ?>|<?php echo $margine ?>&chl=<?php echo $url ?>" download="http://chart.apis.google.com/chart?chs=<?php echo $dimensione ?>x<?php echo $dimensione ?>&cht=qr&chld=<?php echo $livello_codifica ?>|<?php echo $margine ?>&chl=<?php echo $url ?>">DOWNLOAD QR CODE</a></center></tr>

</td>

