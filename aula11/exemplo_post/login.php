<h1>Request Method : GET</h1>

<?php

  if (isset($_POST['usuario'])){
  if($_POST['usuario'] == "admim" &&  $_POST['Senha'] == 123){
    echo "Usuário logado";
  }else{
    echo "Usuário ou senha inválidos!";
  }

}else{
  //manda abrir outro arquivo,o formulário de login
  //caso o usuário tente abrir esse arquivo pela URL
  //sem acessar o formulário de login "redirecionamento"
  header("Location: form_login.html");


}

?>