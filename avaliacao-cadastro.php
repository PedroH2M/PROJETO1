<?php

    require_once 'config.inc.php';

    $nome = $_REQUEST['nome'];
    $nota = $_REQUEST['nota'];
    $avaliacao = $_REQUEST['avaliacao'];

    $sql = "INSERT INTO avaliacao (nome, nota, avaliacao) 
            VALUES ('$nome','$nota','$avaliacao')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Avaliação cadastrada com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
    }

        
    mysqli_close($conexao);

?>
