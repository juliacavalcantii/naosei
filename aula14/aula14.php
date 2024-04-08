<?php
 
try{
    $pdo = new PDO('mysql:host=localhost; dbname=etec_23081', 'root', '');
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("conectado");
}catch(PDOException $e){
    echo'Erro: ' . $e->geteMensagem();
    echo("Não conectado");
}
 ?>
