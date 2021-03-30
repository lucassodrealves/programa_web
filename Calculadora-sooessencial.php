<!-DOCTYPE html->
<html lang="pt-BR">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, scale-initial=1.0">
<title>Calculadora</title>



<?php
echo "Aqui jaz uma calculadora; a qual pede dois números e qual operação(soma, subtração, multiplicação, ou divisão) quer calcular com eles.<br />";
echo "Digite o 1º número:<br />";
$num1=72;
echo "Digite o 2º número:<br />";
$num2=74;


function multiplica($num1,$num2){
	$produz=$num1*$num2;
    return $produz;
}
function divide($num1,$num2){
    if($num2==0){
		echo"<br/>Atenção, é impossível uma divisão por 0";
	}
	else;
	$ciente=$num1/$num2;
	return $ciente;
}        
function subtrai($num1,$num2){
	$dife=$num1-$num2;
	return $dife;
}
function soma($num1,$num2){
	$som=$num1+$num2;
	return $som;
}
/*A entender se declaração inicial dos números se afirmam em todo o contexto das funções;sem necessidade da mesma ser exercida na chamada*/

echo "Coloque o(s) número(s) da operação desejada:   <br />1-multiplicação; 2- divisão; 3- subtração; 4- soma; 5- fazer todas";


	$operação=5;


	switch($operação){/*Se os casos fossem nomes seria possível usar esse condicional?*/
case 1:
    echo"<br />Multiplicação escolhida <br />";
    echo"<br />".multiplica($num1,$num2);
	break;
case 2:
	echo "<br />Divisão escolhida <br />" ;
	echo"<br />" .divide($num1,$num2);

  
                       /*Do que parte a função determina sua existência*/
case 3:
	echo "<br />Subtração escolhida<br />";
	echo"<br />" .subtrai($num1,$num2);
	break;



case 4:
    echo "<br />Soma escolhida<br />";
	echo"<br />".soma($num1,$num2);
	break;
	
case 5:

	echo"<br /><br />Multiplicação escolhida <br />";
    echo"  ".multiplica($num1,$num2);
	echo "<br /><br />Divisão escolhida <br />" ;
	echo" " .divide($num1,$num2);
	echo " <br /><br />Subtração escolhida<br />";
	echo" " .subtrai($num1,$num2);
	echo "<br /><br />Soma escolhida<br />";
	echo" ".soma($num1,$num2);
	break;
	default;
	echo "<br />Operação não teve efetuação-reinicie e redigite o pedido";
	
	
	
   

	


}
 
	   /*A entender se declaração inicial dos números se afirmam em todo o contexto das funções;sem necessidade da mesma ser exercida na chamada*/


	
	





	








?>




</html>



  