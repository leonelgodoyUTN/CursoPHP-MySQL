<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OperadoresMatematicos</title>
</head>

<body>


<form name="form1" method="post" action="">
	<p>
	<label for="num1"></label>
	<input type="text" name="num1" id="num1">
	<label for="num2"></label>
	<input type="text" name="num2" id="num2">
	<label for="operacion"></label>
	<select name="operacion" id="operacion">
		<option>Suma</option>
		<option>Resta</option>
		<option>Producto</option>
		<option>Cociente</option>
		<option>Modulo</option>
	</select>
	</p>
	<p>
		<input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
	</p>
</form>


<?php 
include 'funcionesAritmeticas.php';

if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    
    calcular($numero1, $numero2, $operacion);
}

?>

</body>
</html>




