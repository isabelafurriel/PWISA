<?php include "cabecalho.php";?>


<h1>Clientes</h1>

<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th></th>
        </tr>
    </thead>

    <tbody>
    

    <tr>
        <td></td>
        <td>Isabela</td>
        <td>Isabela_furriel@outlook.com</td>
        <td><a class="btn btn-warning">Editar</a> </td>
        <td><a class="btn btn-danger">Excluir</a> </td>
    </tr>

    <?php
    for($i = 0; $i< 10; $i++)
    {
        ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>Nome<?php echo $i; ?></td>
        <td>Email <?php echo $i; ?></td>
        <td><a class="btn btn-warning">Editar</a> </td>
        <td><a class="btn btn-danger">Excluir</a> </td>
        </tr>
    <?php
    }
    ?>

    </tbody>
    </table>

<?php include "rodape.php"; ?>