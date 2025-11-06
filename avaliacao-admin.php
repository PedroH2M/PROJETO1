<?php

    require_once 'config.inc.php';

    echo "<h1>Avaliações</h1>";
?>
<h3>Lista de comentários</h3>

<?php
    $sql = "SELECT * FROM avaliacao";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Nome: ".$dados['nome'];
            echo " | Nota: ".$dados['nota'];
            echo " | Comentário: ".$dados['avaliacao'];
            echo " | <a href='?pg=avaliacao-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhuma avaliação cadastrada!";
    }

    mysqli_close($conexao);

?>


