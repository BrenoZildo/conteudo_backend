<?php 
require_once "../template/menu.php";
require_once "../template/cabecalho.php"; 
require_once "consultar_todos.php";
?>
<div class="container">
    <h1>Usuários</h1>
    <hr>
<form action="<?php echo isset($usuario) ? 
    "atualizar.php" : 
    "inserir.php"; ?>"
     method="post" enctype="multipart/form-data">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
     
        <input type="hidden" name="idevento" value="<?php echo $evento->idevento ?? "" ;?>"><br>

    <div class="text-end">
      <a href="formulario.php" class="btn btn-primary btn-lg">Inserir Novo</a>
    </div>

    <table class="table" id="tabela_dados">
        <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
<tbody>
<?php foreach($usuarios as $usuario): ?>
    <tr>
      <td><?= $usuario->nome ?></td>
      <td><?= $usuario->idade ?></td>
      <td><?= $usuario->email ?></td>
      <td><?= $usuario->endereco ?></td>
      <td>
      <a href="excluir.php?id=<?= $usuario->idusuario ?>" class="btn btn-danger">
    <i class="fas fa-trash-alt"></i> Excluir
</a>

<a href="formulario.php?id=<?= $usuario->idusuario ?>" class="btn btn-primary">
    <i class="fas fa-edit"></i> Atualizar
</a>

     </td>
    </tr>
     <?php endforeach; ?>
      </tbody>
    </table>
</div>
<?php 
  require_once "../template/rodape.php";
?> 
