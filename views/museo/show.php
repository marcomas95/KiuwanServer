<?php

$this->title = 'Panoramica Musei';

?>

<table>
    <?php foreach($museo as $m): ?>
        <td>
            <tr><center><h1><?php echo $m->nome; ?></h1></center></tr>
            <tr><center><h1><?php echo '<img src="' . $m->immagine . '" alt="Not Found.">'; ?></h1></center></tr>
            <tr><center><?php echo $m->indirizzo; ?></center></tr>
            <tr><center><?php echo $m->apertura; ?></center></tr>
            <tr><center><?php echo $m->chiusura; ?></center></tr>
            <tr><center><?php echo $m->descrizione; ?></center></tr>
            <?php
            $link = "/Project/Server/SmartMuseum/web/index.php?r=opera%2fshow&id=";
            $link.= $m->id_museo;
            ?>
            <tr><center><a id="<?php $m->id_museo ?>" class="mybut btn btn-primary btn-mini" href= "<?php echo $link ?>"> Visualizza </a></center></tr>
        </td>
    <?php endforeach; ?>
</table>

<!--foreach ($museo as $m) {
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
}-->


<div class="body-content">
    <body background="/Project/Server/SmartMuseum/images/2.jpg">
</div>
