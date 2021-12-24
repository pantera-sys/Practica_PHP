<?php

$words = array("luna", "sol", "cielo");
// $desordenadas = array();

$form = "<form action='analisis.php'>";
for ($i=0; $i < count($words) ; $i++) { 
    $form .= "La palabra: ".str_shuffle($words[$i]). " ".
    "<input type='text' name='palabra".$i."'>".
    "<br>";
}


$cierre = "</form>";
$button = "<button type='submit'>Enviar</button>";

// print_r($desordenadas);

// echo "
// <form action='analisis.php'>
//  <input type='text' name='palabra0'>
//  <input type='text' name='palabra1'>
//  <input type='text' name='palabra2'>
//  <button type='submit'>Enviar</button>
//  </form>
// ";

echo $form.$button.$cierre;