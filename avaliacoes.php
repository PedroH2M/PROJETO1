<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM avaliacao";
    $resultado = mysqli_query($conexao,$sql);

?>
<div class="container mt-3">
    <h2>Avaliações de outros clientes!</h2>
    <p>Todos os clientes nos avaliaram</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Nota</th>
            <th>Comentário</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?=$dados['nome']?></td>
            <td><?=$dados['nota']?></td>
            <td><?=$dados['avaliacao']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
</div>