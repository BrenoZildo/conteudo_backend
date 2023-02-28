<h2>Estrutura de repetição - for</h2>
<p>
    Utilizada para repetir um conjunto de instruções por umasknúmero determinado de vezes.
</p>

<strong>Exemplo</strong>
<pre>
    for(inicio, condição, passo){
        //comandos a serem repetidos.
    }

</pre>

<?php
  for($contador = 1; $contador < 10; $contador++){
     echo "repetindo essa linha $contador x<br>";
  }
  ?>