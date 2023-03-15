<h2>Matriz</h2>
<p>
    São estruturas de dados biodimensional,
    onde é necessário informar 2 indices para 
    realizar o acesso de uma valor.
</p>
<p>
    Na prática consiste de um vetor que armazena
    outros vetores.
</p>

<?php

 $produto1 = [
             "nome"  => "camera",
             "marca" => "LG",
             "preço" => 2500
            ];

$produto2 = [
             "nome"  => "Notebook",
             "marca" => "Dell",
             "preço" => 7500
            ];

$produto3 = [
             "nome"  => "Smartphone",
             "marca" => "Samsung",
             "preço" => 3500
            ];

$produtos = [ 
             $produto1,
             $produto2,
             $produto3
           ];



//imprimir todos os valores da matriz,utilizando
//duas estruturas de repetição,1 para as linhas outra para 
//as colunas

for($i=0; $i<=2; $i++){
  foreach($produtos[$i] as $key => $value){
    echo $value. "<br>";
   }
}

echo "<table border=1>";
//outra forma
foreach($produtos as $produtos){
    echo "<td>". $produtos["nome"]. "</td>";
    echo "<td>". $produtos["marca"]. "</td>";
    echo "<td>". $produtos["preço"]. "</td>";

    echo "</tr>";
}

 echo "</table>";
