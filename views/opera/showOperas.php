<?php

$numeroOpere = 0;

$this->title = 'Panoramica Opere';
?>

<table>
    <?php foreach($opera as $o): ?>
    <td>
        <tr><center><h1><?php echo $o->titolo; ?></h1></center></tr>
        <tr><center><h1><?php echo '<img src="' . $o->immagine . '" alt="Not Found.">'; ?></h1></center></tr>
        <tr><h3><center><?php echo $o->autore; ?></center></h3></tr>
        <tr><h3><center><?php echo $o->categoria; ?></center></h3></tr>
        <tr><center><?php echo $o->materiali; ?></center></tr>
        <tr><center><?php echo $o->periodo_storico; ?></center></tr>
        <tr><center><?php echo $o->tecnica; ?></center></tr>
        <tr><center><?php echo $o->movimento_artistico; ?></center></tr>
        <tr><center><?php echo $o->descrizione; ?></center></tr><hr>
        <?php $numeroOpere+=1; ?>
    </td>
    <?php endforeach; ?>
</table>


<?php
/*foreach($opera as $o){
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

*/?>

<div class="body-content">
    <body background="/Project/Server/SmartMuseum/images/2.jpg">
</div>