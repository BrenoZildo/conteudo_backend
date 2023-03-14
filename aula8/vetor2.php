<h2>Vetor indexado por texto</h2>
<p>
    Os vetores podem usar textos para
    indexar (identificar) os valores armazenados.
    exemplo:

    
         +------------+ 
    nome |Adrian      |
         +------------+
         
         +------------+ 
   nota1 |9           |
         +------------+

         +------------+ 
   nota2 |7           |
         +------------+

</p>
<?php
   
   $aluno =[
    "nome" => "Adrian",
    "nota1" => 9,
    "nota2" => 7
    ];

 
    $aluno["notatotal"] = ($aluno ["nota1"] + $aluno["nota2"]);
    var_dump($aluno);

    echo "<p>&nbsp;</p><pre>";
    //imprimir todos os valores de um vetor
    //utilizando o foreach
    foreach($aluno as $key => $value){
        
        printf("%23s\n", "+------------+");
        printf("%9s | %9s  | \n" , $key,$value);
            
    }
    
?>
</pre>