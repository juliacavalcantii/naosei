<?php
if (5 > 3){
    echo "Verdadeiro";
}
echo "<br>";
echo "##########################################";
echo "<br>";
if (5 < 3){
    echo "verdadeiro";
}
echo "<br>";
echo "##########################################";
echo "<br>";

$t = 14;
if ($t == 20) {
echo "seilaaaa";
}

echo "<br>";
echo "##########################################";
echo "<br>";

$y = 14;
if ($y == 20) {
echo "verdadeiro";
} else {
    echo "falso";
}

echo "<br>";
echo "##########################################";
echo "<br>";

$z = date ("H") - 3;
 
echo ("$z");
echo "<br>";
if ($z < "13") {
    echo "Bom  dia";
} else {
    echo "boa noite";
}
echo "<br>";
echo "##########################################";
echo "<br>";

echo "<br>";
echo "##########################################";
echo "<br>";
$n = date ("H") - 3;

echo ("$n");

if ($n < "8") {
    echo "good morning";
} elseif ($n < "12"){
    echo "good day";
} else {
    echo "good night";
}
echo "<br>";
echo "##########################################";
echo "<br>";


?>