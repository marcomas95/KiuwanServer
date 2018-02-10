<?php

$numeroOpere = 0;

$this->title = 'Panoramica Opere';

foreach($opera as $o){
    if ($o->id_museo == $id){
        echo "<strong><center><h1>$o->titolo</h1></center></strong>";
        echo "<center>".'<img src="' . $o->immagine . '" alt= "Immagine non presente." style=\'width:60%;\' >'."</center><br>";
        echo "<center> Autore: ".$o->autore."</center><br>";
        echo "<center> Categoria: ".$o->categoria."</center><br>";
        echo "<center> Materiali: ".$o->materiali."</center><br>";
        echo "<center> Periodo storico: ".$o->periodo_storico."</center><br>";
        echo "<center> Tecnica: ".$o->tecnica."</center><br>";
        echo "<center> Movimento artistico: ".$o->movimento_artistico."</center><br>";
        echo "<p align=”justify”>".$o->descrizione." </p><br>";
        echo "<hr>";
        $numeroOpere+=1;
    }
}

if($numeroOpere == 0){
    echo "<strong><center><h2>Nessuna opera presente nel database!!!</h2></center></strong>";
}

?>

<div class="body-content">
    <body background="/MUS/images/2.jpg">
</div>