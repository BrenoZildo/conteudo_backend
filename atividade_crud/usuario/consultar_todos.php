<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conect.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM usuario";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();
   
   //pega os resultados da consulta
   $resultados = $comando->get_result();

   //pega a primeira linha de resultado da consulta
   $usuarios = [];
   while ($usuario = $resultados->fetch_object()){
      $usuarios[] = $usuario;
   }

