<?php
   // importa o arquivo de conexão
<<<<<<< HEAD
   require_once "../banco/conexao.php";
=======
   require_once "../banco/conect.php";
>>>>>>> ec4b40a (auto_incremento)

   // verifica se o nome, login e senha foram enviados
   // do formulário de cadastro
   if(isset($_POST['idusuario']) && isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['email']) && isset($_POST['endereco'])) {
      $idusuario = $_POST['idusuario'];
      $nome = $_POST['nome'];
      $idade = $_POST['idade'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];

      // cria uma variável com um comando SQL
<<<<<<< HEAD
      $SQL = "INSERT INTO `info`.`usuario` (`idusuario`, `nome`, `idade`, `email`, `endereco`) VALUES (?, ?, ?, ?, ?);";
=======
      $SQL = "INSERT INTO `mydb`.`usuario` (`idusuario`, `nome`, `idade`, `email`, `endereco`) VALUES (?, ?, ?, ?, ?);";
>>>>)>>> ec4b40a (auto_incremento

      // prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      // faz a vinculação dos parâmetros ?, ?, ?, ?, ?
      $comando->bind_param("issss", $idusuario, $nome, $idade, $email, $endereco);

      // executa o comando
      $comando->execute();
   }
   
   // volta para o formulário
   header("Location: index.php");

