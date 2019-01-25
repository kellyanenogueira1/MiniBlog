<?php
    $dsn = 'mysql:host=localhost;dbname=database';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);
    }catch (PDOException $e){
        echo 'Código de erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    }
?>