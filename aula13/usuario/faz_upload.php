<?php

//local temporário onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tmp_name'];

//cria um novo nome único para foto
$nome_foto = time().$_FILES['foto']['name'];

//local para onde o arquivo de upload vai ser enviado
$destino =  "../uploads/$nome_foto";

//move o arquivo de upload para a pasta destino
move_uploaded_file($origem, $destino);

