<?php
  $nome = "Aprendizado PHP";
  echo $nome;
  var_dump($nome); //exibe detalhes da variável

  $umbooleano = TRUE;
  $umaString = "PHP";
  $uminteiro = 123;

  echo gettype($umaString)."<br>";
  echo gettype($umbooleano)."<br>";
  echo gettype($uminteiro)."<br>";

  /*a função is_tipo retorna true ou false para a verificação do is_tipo
  de variável
  is_int , is_string  etc
  */
  if(is_int($uminteiro)){
    echo "Esta variável é um inteiro <br>";
  }

  /*ARRAYS*/
  //Arrays indexados sem chaves
  $vetor = array("branco","vermelho", "preto");
  var_dump($vetor);

  //Arrays indexados sem chaves
  $vetorCores = array("cor1"=>"branco", "cor2"=>"vermelho","cor3"=>"preto");
  var_dump($vetorCores);  
 ?>
