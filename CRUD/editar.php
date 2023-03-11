<?php
    include 'contato.class.php';
    $contato = new Contato();

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        
        $info = $contato->getInfo($id);

        if(empty($info['EMAIL'])) {
            header("Location: index.php");
            exit;
        }
    }
    else{
        header("Location: index.php");
        exit;
    }
?>

<h1>Editar</h1>

<form method="POST" action="editar_submit.php">
    <input type="hidden" name="id" value="<?php echo $info['ID']; ?>" />

    Nome: <br/>
    <input type="text" name="novo_nome" value="<?php echo $info['NOME']; ?>" /> <br/><br/>

    Email: <br/>
    <input type="email" name="email" value="<?php echo $info['EMAIL'];?>" /> <br/><br/>
    
    <input type="submit" value="Alterar" />
</form>
