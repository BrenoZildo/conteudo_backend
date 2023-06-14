<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
<div class="container">
    <h1>Cadastro de usuário</h1>
    <hr>

    <form action="<?php echo isset($usuario) ? "atualizar.php":  "inserir.php"; ?>"    method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario ?? "" ;?>"><br>
        
        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $usuario->nome ?? "" ;?>"><br>

        <label>Idade</label><br>
        <input type="text" name="idade" value="<?php echo $usuario->idade ?? "" ;?>"><br>

        <label>Email</label><br>
        <input type="text" name="email" value="<?php echo $usuario->email ?? "" ;?>"><br>
        
        <label>Endereço</label><br>
        <input type="text" name="endereco" value="<?php echo $usuario->endereco ?? "" ;?>"><br>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<?php require_once "../template/rodape.php"; ?>
