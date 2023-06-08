<?php
    require_once "consultar_por_id.php";
?>
<div class="container">
    <h1>Cadastro de Usuário</h1>
    <hr>

    <form action=<?php echo isset($usuario) ? 
                        "atualizar.php":
                        "inserir.php"; ?>
    method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario ?? "" ;?>"
        class = "form-control"><br>
        
        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $usuario->nome ?? "" ;?>" 
        class = "form-control"><br>

        <label>Idade</label><br>
        <input type="text" name="idade" value="<?php echo $usuario->idade ?? "" ;?>"
        class = "form-control"><br>

        <label>Email</label><br>
        <input type="text" name="email" value="<?php echo $usuario->email ?? "" ;?>"
        class = "form-control"><br>

        <label>Endereço</label><br>
        <input type="text" name="endereco" value="<?php echo $usuario->endereco ?? "" ;?>"
        class = "form-control"><br>

        <button type="submit" class= "btn btn-secundary">Cadastrar</button>
    </form>
</div>

