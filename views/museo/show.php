<?php

$this->title = 'Panoramica Musei';

foreach ($museo as $m) {
    echo "<strong><center><h1>$m->nome</h1></center></strong>";
    echo "<center> Indirizzo: ".$m->indirizzo."</center><br>";
    echo "<center> Orario apertura: ".$m->apertura."</center><br>";
    echo "<center> Orario chiusura: ".$m->chiusura."</center><br>";
    echo "<center>".'<img src="' . $m->immagine . '" alt="error" style=\'width:60%;\'>'."</center><br>";
    echo "<p align=”justify”>".$m->descrizione." </p><br>";
    $link= "/Project/Server/SmartMuseum/web/index.php?r=opera%2fshow&id=";
    $link.= $m->id_museo;
    echo "<center><a id=\"".$m->id_museo."\" class=\"mybut btn btn-primary btn-mini\" href= $link> Visualizza </a></center>";
    echo "<hr>";
}

?>

<div class="body-content">
    <body background="/Project/Server/SmartMuseum/images/2.jpg">
</div>
