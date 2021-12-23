<?php

$palabras = array("luna", "sol", "cielo");
print_r ($palabras);

if ($_REQUEST["palabra0"] == $palabras[0]) {
    echo "la palabra es correcta";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[0]."<br>";
} 

if ($_REQUEST["palabra1"] == $palabras[1]) {
    echo "la palabra es correcta"."<br>";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[1]."<br>";
}

if ($_REQUEST["palabra2"] == $palabras[2]) {
    echo "la palabra es correcta"."<br>";
} else {
    echo "la palabra es incorrecta, la palabra era ". $palabras[2]."<br>";
}