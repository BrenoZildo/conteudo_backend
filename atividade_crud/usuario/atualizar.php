<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conect.php";

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $email = $_POST['email'];
   $endereco = $_POST['endereco'];
   $idusuario = $_POST['idusuario'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `usuario` SET `nome`= ?, `idade`= ?, `email`= ?, `endereco`= ?  WHERE  `idusuario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $idade, $email, $endereco, $idusuario);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   


