<?php
	if(isset($_POST['email'])&&isset($_POST['clave'])){
		require_once "php/connect.php";
		require_once "procesos/login.php";
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello word </title>
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="../PDO/css/bootstrap.min.css">
        <!--Estilos de fuentes-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;500;600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/051a7f8fae.js" crossorigin="anonymous"></script>
        <!--LLamado al style.css-->
    <link rel="stylesheet" href="../PDO/css/style.css">
</head>
<!--Estructura De La Pagina-->
<body class="bg-dark">
    <section>
      <div class="row g-8">
      <div class="col-lg-7 row align-items-center">
        <!--Carousel-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item img1 min-vh-100 active">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">La Mas potente del mercado</h5>
                <a href="#" class="text-muted text-decoration-none">Visitar nuestra tienda</a>
              </div>
            </div>
            <div class="carousel-item img2 min-vh-100">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Descubre la nueva generacion</h5>
                <a href="#" class="text-muted text-decoration-none">Visitar nuestra tienda</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
            <!--Fin del carousel-->
        </div>
        <div class="col-lg-5 d-flex flex-column align-items-center min-vh-100">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                  <img src="img/logo.png" class="img-fluid" width="90px">
            </div>
            <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
              <h1 class="font-weight-bold mb-4 text-light">Bienvenido de vuelta</h1>
              <!--Formulario-->
              <form class="mb-5" action="" method="POST">
                <div class="mb-4">
                  <label class="form-label font-weight-bold text-light" >Email </label>
                  <input type="email" name="email" class="form-control bg-dark-x border-1" placeholder="Ingrese su email" aria-describedby="emailHelp" required="">
                </div>
                <div class="mb-4">
                  <label class="form-label font-weight-bold text-light">Contraseña</label>
                  <input type="text" name="clave" placeholder="Ingrese su contraseña" class="form-control bg-dark-x border-1 mb-2" required="">
                  <a href="#" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100" value="Ingresar">Iniciar Sesion</button>
              </form>
              <!--Fin del formulario-->
              <p class="font-weight-bold text-center text-muted ">O Iniciar Sesion Con </p>
              <!--Redes sociales-->
              <div class="d-flex justify-content-around">
                  <button type="submit" class="btn btn-outline-light flex-grow-1 mx-2"><i class="fab fa-google lead mx-2"></i>Google</button>
                  <button type="submit" class="btn btn-outline-light flex-grow-1 ml-2"><i class="fab fa-facebook-f lead mx-2"></i>Facebook</button> 
              </div>
                </div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                  <p class="d-inline-block text-light mb-0">¿Todavia No tienes una cuenta?</p><a href="../PDO/registro.php" class="text-light font-weight-bold text-decoration-none">Crea una ahora</a>
                </div>
            </div>
          </div>
      </div>
    </section> 
    
    <!--boostrap  min js y popper min js -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="../PDO/js/bootstrap.min.js"></script>
</body>
</html>