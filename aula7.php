<?php
$a = 5;
$b = 5.34;
$c = "Hello";
$d = true;
$e = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d); 
var_dump($e); 

$a = 5;
$b = 5.34;
$c = "25 kilometers";
$d = "kilometers 25";
$e = "hello";
$f = true;
$g = NULL;

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

echo "</br>";
echo "############################# Cast para Inteiro #########################";
echo "</br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d); 
var_dump($e); 
var_dump($f);
var_dump($g);

echo "</br>";
echo "############################# Cast para Inteiro #########################";
echo "</br>";

$a = 5;
$b = 5.34;
$c = "25 kilometers";
$d = "kilometers 25";
$e = "hello";
$f = true;
$g = NULL;

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d); 
var_dump($e); 
var_dump($f);
var_dump($g);




?>