<html> 
<head> 
   <title>ELECTIVO I - EJERCICIO 2PHP</title> 
</head> 
<body> 
<H1>NUMERO MENOR</H1> 
<p>
<?php 
/* LEER VARIABLES DE $_GET */
$n1=intval($_GET['num1']);
$n2=intval($_GET['num2']);

if ($n1>$n2){
	echo " El segundo numero (".$n2.") es menor que el primero (".$n1.")";
}
elseif ($n1==$n2){
    echo "El primer numero (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
}
 ?>
</p>
<br> 
</body> 
</html>