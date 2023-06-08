<?php 
  require "consultar_todos.php";
?>
    <div class="container">
    <h1>Usuários</h1>
    <hr>

    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
    </div>

    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario->nome ?></td>
            <td><?= $usuario->idade ?></td>
            <td><?= $usuario->email ?></td>
            <td><?= $usuario->endereco ?></td>
            <a href="excluir.php?id=<?= $usuario->idusuario ?>" class="btn btn-danger">
              <i class="fa-solid fa-trash-can"></i>Excluir</a>
              <a href="formulario.php?id=<?= $usuario->idusuario ?>" class="btn btn-primary">
              <i class="fa-solid fa-pen-to-square"></i>Atualizar</a>

            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
