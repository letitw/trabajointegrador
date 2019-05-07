<?php
  require_once("validator.php");

  $warning = [];

  $sinErrores = true;
  $nombreOK = "";
  $apellidoOK = "";
  $emailOK = "";
  $passOK= "";
  $errorFoto="";

  if ($_POST){
    $warning = validator();
    if(count($warning)== 0){
      $nombreOK = $_POST["nombre"];
      $apellidoOK = $_POST["apellido"];
      $emailOK = $_POST["email"];
      $passOK = password_hash($_POST['password'], PASSWORD_DEFAULT);
      ;

      $usuario=[
        "email"=> $emailOK,
        "pass"=> $passOK,
      ];
      $usuarioJson = json_encode($usuario);
      file_put_contents('usuarios.json', $usuarioJson);
      header("location:home.php");exit;
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
     <link rel="stylesheet" href= "registro.css">
     <title>Wish | Registrate</title>
   </head>
   <body>
 <div class="super_container">
 <!-- Header -->
 <header class="header">
   <div class="logo"><a href="home.php">Wish</a></div>
 			<nav class="main_nav">
 				<ul>
 					<li><a href="clothes.html">ROPA</a></li>
 					<li><a href="accessories.html">ACCESORIOS</a></li>
 					<li><a href="contacto.html">CONTACTO</a></li>
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
    <a href="ropa.html">ROPA</a>
    <a href="accesorios.html">ACCESORIOS</a>
    <a href="contacto.html">CONTACTO</a>
    <a href="login.php">LOGIN</a>
    <a href="registro.php">REGISTRARSE</a>
  </div>
 </header>

 <!--Agregue Brs porque si no se superponia hay que corregir con CSS-->
 <br>
 <br>
 <br>

 <!--REGISTRO YA VALIDADO-->
<br>
<br>
<br>
<br>

<div class="caja-registro">
  <h1>Registrate</h1>
    <form class="" action="registro.php" method="POST" enctype="multipart/form-data">
      <div class="texto-registro">
        <label for="nombre"></label>
        <input id="nombre" type="text" name="nombre" value="<?=$nombreOK?>" placeholder="Nombre">
        <?php if(isset($warning["nombre"])): ?>
          <p style="color:red;font-size:11px;"><?=$warning["nombre"]?></p>
        <?php endif; ?>
      </div>
      <div class="texto-registro">
        <label for="apellido"></label>
        <input id="apellido" type="text" name="apellido" value="<?=$apellidoOK?>" placeholder="Apellido">
        <?php if(isset($warning["apellido"])): ?>
          <p style="color:red;font-size:11px;"><?=$warning["apellido"]?></p>
        <?php endif; ?>
      </div>
      <div class="texto-registro">
        <label for="email"></label>
        <input id="email" type="text" name="email" value="<?=$emailOK?>" placeholder="Email">
        <?php if(isset($warning["email"])): ?>
          <p style="color:red;font-size:11px;"><?=$warning["email"]?></p>
        <?php endif; ?>
      </div>
      <div class="texto-registro">
        <label for="password"></label>
        <input id="password" type="password" name="password" value="" placeholder="Contraseña">
        <?php if(isset($warning["password"])): ?>
          <p style="color:red;font-size:11px;"><?=$warning["password"]?></p>
        <?php endif; ?>
      </div>
      <div class="texto-registro">
        <label for="pais">Vivo en:</label>
        <select class="" name="pais" id="pais">
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ar") : ?>
            <option value="ar" selected >Argentina</option>
          <?php else : ?>
            <option value="ar">Argentina</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "br") : ?>
            <option value="br" selected >Brasil</option>
          <?php else : ?>
            <option value="br">Brasil</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "bo") : ?>
            <option value="bo" selected >Bolivia</option>
          <?php else : ?>
            <option value="bo">Bolivia</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ch") : ?>
            <option value="ch" selected >Chile</option>
          <?php else : ?>
            <option value="ch">Chile</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "cl") : ?>
            <option value="cl" selected >Colombia</option>
          <?php else : ?>
            <option value="cl">Colombia</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ec") : ?>
            <option value="ec" selected >Ecuador</option>
          <?php else : ?>
            <option value="ec">Ecuador</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "py") : ?>
            <option value="py" selected >Paraguay</option>
          <?php else : ?>
            <option value="py">Paraguay</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "pe") : ?>
            <option value="pe" selected >Peru</option>
          <?php else : ?>
            <option value="pe">Peru</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "uy") : ?>
            <option value="uy" selected >Uruguay</option>
          <?php else : ?>
            <option value="uy">Uruguay</option>
          <?php endif; ?>
          <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ot") : ?>
            <option value="ot" selected >Otro</option>
          <?php else : ?>
            <option value="ot">Otro</option>
          <?php endif; ?>
        </select>
      </div>
      <div class="texto-registro">
        <label for="foto">Mi foto de perfil</label>
        <input type="file" name="foto" value="foto">
        <?php if(isset($warning["foto"])): ?>
          <p style="color:red;font-size:11px;"><?=$warning["foto"]?></p>
        <?php endif; ?>
      </div>
      <div class="texto-checkbox">
        <input id=mailing type="checkbox" name="mailing" value="si">
        <label for="mailing">Quiero que me envien ofertas por mail!</label>
      </div>
    <div class="buton_registro">
      <button type="submit" name="button">REGISTRAME</button>
    </div>
</form>
</div>

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
      <a href="faqs.html">PREGUNTAS FRECUENTES</a>
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
    </body>
</html>
