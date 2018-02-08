<?php  
$nome = "Thiago";
  
  function teste () { 

  	/* para fazer a  utilização de uma variável global d
  	entro das funções, é necessário dizer para a  função  que a variável criada internamente e a declarada 
  	anteriormente são a mesma coisa*/ 
  	 
   global $nome;
   echo $nome; 

  } 
  
  function teste2 () {  
  	/*Nesse caso foi criada  uma variável  com o 
  	mesmo nome da variável global, porém não foi dito para a g função que essa era
  	a mesma variável global, portanto  ela é tratada como de escopo local, ou seja, 
  	só é reconhecida pela própria função*/
  	$nome =" Teste02";
  	 echo $nome;


  }  
  teste ();
  echo "<br>";
  teste2(); 
  // variáveis super globais podem ser acessadas de qualquer arquivo PHP sem que seja necesário declará-la como globais

  /* Operadores no PHP 
  		Operadores de atribuição $nome  = "TEste" 
  		Operardor de concatenaçã0 : . 
  		Operadro  Composto $nome .= "Treinamento"
  		Operador 
  
  
  
   */ 
?>  

