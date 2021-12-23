<?php

$palabras = array("luna", "sol", "cielo");
$desordenadas = array();

for ($i=0; $i < 3 ; $i++) { 
    $desordenadas[$i] =  str_shuffle($palabras[$i]);
}

$form = "<form action='analisis.php'>";
$input = "";
$cierre = "</form>";
$button = "<button type='submit'>Enviar</button>";

print_r($desordenadas);
echo "
<form action='analisis.php'>
 <input type='text' name='palabra0'>
 <input type='text' name='palabra1'>
 <input type='text' name='palabra2'>
 <button type='submit'>Enviar</button>
 </form>
";