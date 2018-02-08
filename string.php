<?php 
  
  $nome = $_GET['meuNome'] ;
        
  echo "Nome: ";
  		for ($i=0; $i < strlen($nome); $i++ ) 
  		{	
  				 echo $nome[$i];
  			 if($nome[$i]==" ") 

  			 {
  			 	 echo "<br> Sobrenome: "; 
 	  			
  			 } 
  		} 

   echo strtoupper ($nome)."<br>"; //Converte uma String inteira para letras maiúsculas 
   echo strtolower ($nome)."<br>"; // Converte uma Strng inteira para letras minúsculas
   echo ucwords ($nome)."<br>";   // Converte para maiúsculo apenas a primeira letra de cada palavra
   $nome =  str_replace("a","o",$nome);  // Troca a ocorrência de um determ	inado caractere por outro caractere ( semelhante ao localizar e substituir)

 	$frase="Teste testando um teste";
 	$q = strpos ($frase,"um"); // retorna a posicao de uma ocorrencia na string 
	$frase =  substr($frase,0,$q); // retorna  uma substring de tamanho definido  //nesse caso a palavra teste é  retirada da string s
	echo $frase;  
	$frase= "Teste testando um teste";
	$frase = substr($frase ,$q+2, strlen($frase)); 
	 echo "<br> Tudo depois de um: ".$frase;

 
 





?> 
