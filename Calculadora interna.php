<!-DOCTYPE html->

<html lang="pt-BR">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width,scale-initial=1.0">

<title> </title>

</head>

<h1 style="font-family= arial"> Calculadora </h1>

<?php







         /*Declarar variáveis(valores e movimento)*/
		 
		
		 $movimento=0;
		 for($movimento=1;$movimento<=4;$movimento++){
		 
		 
		 
		 switch($movimento){
		 
		case 1:
		$nome1='Multiplicação';
		
		echo" ".$nome1;
		
		 
		 $numero1=72;
		 $numero2=74;
		 function multiplica($numero1,$numero2){
			 
		 $multiplicacao=$numero1*$numero2;
		 printf("</br>A multiplicação de %.2f . %.2f é %.2f",$numero1, $numero2, $multiplicacao);
		 }
		 multiplica($numero1,$numero2);
	
		 
		break;
		 
		 
		case 2:

        $nome2='Soma';
		
		echo" ".$nome2;
        
		
		function somar($valor1,$valor2){
		GLOBAL $soma;
		
		$soma=$valor1+$valor2;
		
		}
		somar(72,74);
		echo "</br>O valor da soma de 72 + 74 é   ".$soma;
		
		
		break;
		
		case 3:
		
	    $nome3='Divisão';
		
		echo" ".$nome3;
	   
		
		function divide($nume1,$nume2){
			
			STATIC $divisao;
			
			$divisao=$nume1/$nume2;
			
			echo "</br> A divisão de  ".$nume1. "por ".$nume2. "é".$divisao;
			
		}
		
		
		divide(72,74);
		
		
		break;
		
		case 4:
		
		$nome4='Subtração';
		
		echo" ".$nome4;

         function subtrai($val1,$val2){
		
		$subtracao=$val1-$val2;
		
		return $subtracao;
	    
        printf("</br>A subtração de  %.2f  e %.2f é igual a ", $val1, $val2);
		echo "  ".subtrai;


        
		
		 }
		 subtrai(72,74);
		 
		 }
		 }

      





















?>

</html>