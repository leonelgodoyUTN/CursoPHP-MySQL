<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de bienvenida a usuarios registrados</title>
</head>
<body>

<?php 
    //se chequea la session
    session_start();

    if(!isset($_SESSION["usuario"])){
        
        header("Location:login.php");
        
    }
?>

<h1>Bienvenidos Usuarios</h1>

<?php 

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>

<a href="http://localhost/cursoPHP/sistema_login/cierre.php">Cerrar Sesion</a>

<p>Información para usuarios loggeados</p>
<a href="http://localhost/cursoPHP/sistema_login/usuarios_registrados2.php">Link pag 2</a>
<a href="http://localhost/cursoPHP/sistema_login/usuarios_registrados3.php">Link pag 3</a>
<a href="http://localhost/cursoPHP/sistema_login/usuarios_registrados4.php">Link pag 4</a>

</body>

</html>