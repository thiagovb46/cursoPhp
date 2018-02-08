<?php 
//Variáveis em php 

$nome = "Thiago Vasconcelos"; 
$sobrenome = "Braga"; 
echo "Nome : ".$nome;   
$nome = $nome." ".$sobrenome;  
	if (isset($nome)) echo "Nome completo: ". $nome;
	
////////////////////////////////////////////////////
/* Tipos primitivos básicos*/

$nome = "Hcode";
$site = 'www.hcode.com.br'; 
$ano = 1990;
$salario = 5550.90 ;
$bloqueado = false;
/////////////////////////////////////////////////   
/*Tipos compostos */
$frutas = array ("abacaxi ", "laranja", "manga"); 
echo "<br>";
echo $frutas[2]; 
$nascimento = new DateTime();
echo "<br>";
echo $nascimento; 
////////////////////// 
/* Tipos Especiais*/
$arquivo = fopen ("index.php");
var_dump($arquivo);
// Diferença entre null e vazio 
$nulo = NULL;
$nulo = ""; 

 ?>
