<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conect.php";

   //verifica se o nome, login e senha foram enviados
   //do formulário de cadastro
   if(isset($_POST['nome']) && isset($_POST['idade'])
   && isset($_POST['email']) && isset($_POST['endereco'])) {

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $email = $_POST['email'];
   $endereco = $_POST['endereco'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `mydb`.`usuario` (`idusuario`, `nome`, `idade`, `email`, `endereco`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $idade, $email, $endereco);

   //executa o comando
   $comando->execute();
   }
   //volta para o formulário
   header("Location: index.php");

   







