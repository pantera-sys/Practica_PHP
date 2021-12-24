<?php

$words = array("luna", "sol", "cielo");
print_r ($words);
echo "<br>";


for ($i=0; $i < count($words) ; $i++) { 
    if ($_REQUEST["palabra$i"] == $words[$i]) {
        echo "La palabra ingresada es correcta<br>";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra era  $words[$i] <br>";
    } 
}

/* if ($_REQUEST["palabra0"] == $palabras[0]) {
    echo "la palabra es correcta<br>";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[0]."<br>";
} 

if ($_REQUEST["palabra1"] == $palabras[1]) {
    echo "la palabra es correcta<br>";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[1]."<br>";
}

if ($_REQUEST["palabra2"] == $palabras[2]) {
    echo "la palabra es correcta<br>";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[2]."<br>";
} */