<?php 
 for ($x = 0;  $x <= 10; $x ){
    echo "O número é $x <br>";
 }

echo "<br>";
echo "##########################################";
echo "<br>";

for ($x = 0; $x <= 100; $x++){
    if ($x == 30)
      break;
    echo "O número é: $x <br>";
}

echo "<br>";
echo "##########################################";
echo "<br>";

for ($x = 0; $x <= 10; $x++){
    if ($x == 5) continue;
    echo "O número é: $x <br>";
}

?>