<?php
session_start();
require_once("validator.php");

  //BORRADOR:
  $warning = [];

  if ($_POST){
    //$warning = validatorLogin();
    if (count($warning) == 0){

      //LOGUearlo

      $usuarioArchivo = file_get_contents("usuarios.json");
      $usuarioBD = json_decode ($usuarioArchivo, true);
      var_dump($usuarioBD);
      var_dump($_POST);


      if ($_POST["email"] == $usuarioBD["email"] && password_verify($_POST['pass'], $usuarioBD['pass'])){
        $_SESSION["email"] = $usuarioBD["email"];
        header("location:home.php");exit;
      }

    }
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href= "login.css">
    <title>Wish | Login</title>
  </head>
  <body>
<div class="super_container">
<!-- Header -->
<header class="header">
  <div class="logo"><a href="home.php">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="ropa.php">ROPA</a></li>
					<li><a href="accessories.php">ACCESORIOS</a></li>
					<li><a href="contact.php">CONTACTO</a></li>
				</ul>
			</nav>
      <div class="search-box">
        <input type="search" name="" value="" class="search_input">
        <button type="submit" name="button" id="search_button">
            <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="login-registro">
        <ul>
          <li><i class="fas fa-unlock"></i></li>
          <li><a href="login.php">Login</a></li>
          <li><i class="fas fa-user"></i></li>
          <li><a href="registro.php">Registrarse</a></li>
        </ul>

      </div>
      <div class="shopping">
        <ul>
          <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
          <li><a href="#"><i class="far fa-heart"></i></a></li>

    </ul>
  </div>
  <label class="hamb" for="toggle">&#9776;</label>
  <input type="checkbox" id="toggle">
 <div class="nuevo_menu">
   <a href="ropa.php">ROPA</a>
   <a href="accesorios.php">ACCESORIOS</a>
   <a href="contact.php">CONTACTO</a>
   <a href="login.php">LOGIN</a>
   <a href="registro.php">REGISTRARSE</a>
 </div>
</header>
<br>
<br>
<br>
<div class="contenedor-login">
   <div class="caja-login">
     <form action="" method="POST">
     <h2>¡A comprar!</h2>
     <div class="texto-login">
       <input type="text" placeholder="Tu E-Mail" name="email" value="">
     </div>
     <div class="texto-login">
       <input type="password" placeholder="Contraseña" name="pass" value="">
     </div>
     <div class="texto-checkbox">
       <br>
     <input type="checkbox"><label>Recordarme</label>
     </div>
     <div class="">
     <input class="btn" type="submit" name="" value="Iniciar Sesión">
   </div>
   <div class="texto-login">
     <a href="#">¿Olvidaste tu contraseña?</a>
   </div>
 </div>
</div>
</form>
<footer class="pie">
<div class="columna-pie">
  <div class="logo-pie">
<a href="home.php">Wish</a>
  </div>
  <div class="nav-pie">
    <ul>
        <li>
          <a href="ropa.html">ROPA</a>
        </li>
        <li>
          <a href="accesorios.html">ACCESORIOS</a>
        </li>
        <li>
          <a href="contacto.html">CONTACTO</a>
        </li>
        <li>
          <a class="preguntas" href="faqs.html">PREGUNTAS FRECUENTES</a>
        </li>
    </ul>
  </div>
  <div class="redes-pie">
    <ul>
      <li>
        <a href="#">
         <i class="fab fa-pinterest"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fab fa-facebook-square"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="copyright">
    © 2019 Wish Inc. All rights reserved
  </div>
</div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
