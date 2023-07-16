<?php

    $dbHost='Localhost';
    $bdUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-bdvs'

    $conexao = new mysqli($dbHost, $bdUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {

        echo "Erro";
    }

    else
    {
        echo "Parabéns!!Conexão efetuada com sucesso!"
    }

?>