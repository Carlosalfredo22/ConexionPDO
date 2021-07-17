<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['clave'])){
	require_once "php/connect.php";
	require_once "procesos/guardar.php";	
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
    <link rel="stylesheet" type="text/css" href="../PDO/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../PDO/css/style2.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
            <img src="../PDO/img/L000042.png" class="img-fluid" width="90px">
            <sub class="LG">La pagina web</sub>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <!--PAGE HEADE-->
            <div class="page-header">
                <sub class="sub3">Welcome Back</sub>
                <sub>La Pagina web <sub class="sub2">SV</sub></sub>
                <br><br><br>
                <h6>¡Si Eres nuevo! Por favor, ingrese su datos para crear una cuenta.</h6>
            </div>
            <!--Fin DEL PAGE HEADER-->
            <br>
            <form class="form-horizontal" method="post" action="registro.php">
                <!--Input de boton nombre-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="">
                    </div>
                </div>
                <br>
                <!--Input de boton apellido-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="">
                    </div>
                </div>
                <br>
                <!--Input de boton email-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="">
                    </div>
                </div>
                <br>
                <!--Input de boton contraseña-->
                <div class="form-ground">
                    <div class="col-sm-20">
                        <input type="password" class="form-control" name="clave" placeholder="Contraseña" required="">
                    </div>
                </div>
                <br>
                <!--Input de boton de enviar-->
                    <div class="btn-ground">
                        <button type="submit" class="btn btn-dark" name="btn-Enviar" value="Guardar">Enviar</button>
                        <button type="button" class="btn btn-outline-primary" style="margin-left: 44px;"><a href="../PDO/index.php">Regresar</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>