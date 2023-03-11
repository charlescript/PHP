

<?php
include 'contato.class.php';
$contato = new Contato();
?>

<h1>Contatos</h1>

<a href="adicionar.php">[ ADICIONAR ]</a> <br/><br/>

<table border="1" width="flex">
    <tr>
        <th>ID</th>
        <th  >NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php
        $lista = $contato->getAll();
        foreach($lista as $item):
        ?>        
        <tr>
            <td><?php echo $item['ID']; ?></td>
            <td><?php echo $item['NOME']; ?></td>
            <td><?php echo $item['EMAIL']; ?></td>
            <td>
                &nbsp; <a href="editar.php?id=<?php echo $item['ID']; ?>">[ EDITAR ]</a> &nbsp;
                <a href="excluir.php?id=<?php echo $item['ID']; ?>">[ EXCLUIR ]</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>
