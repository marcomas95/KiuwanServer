<?php

/* @var $this yii\web\View */
use  yii\db\BaseActiveRecord;
use yii\helpers\Html;

$this->title = 'Smart Museum';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>SMART MUSEUM</h1>
        <h3>Il museo del futuro.</h3>

        <p><a class="btn btn-lg btn-primary" href="/Project/Server/SmartMuseum/web/index.php?r=museo%2fshow">Scopri i musei</a></p>
        <?php
        if (isset($_SESSION['__id'])){
            $url = Html::a('Effettua logout',
                ['//site/logout'],
                ['class' => 'btn btn-lg btn-danger', 'data-method'=>'post']);
            echo "$url";
        } else {?>
            <a class="btn btn-lg btn-success" href="/Project/Server/SmartMuseum/web/index.php?r=site%2Flogin">Effettua login</a>
            <?php
        }
        ?>
    </div>


    <div class="body-content">
        <body background="/Project/Server/SmartMuseum/images/1.jpg">
        
    </div>
</div>
