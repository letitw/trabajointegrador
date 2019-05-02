<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href= "home.css">
    <title>Home</title>
  </head>
  <body>
<div class="super_container">

<!-- Header -->
<header class="header">
  <div class="logo"><a href="home.php">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="ropa.html">ROPA</a></li>
					<li><a href="accesorios.html">ACCESORIOS</a></li>
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

<!-- "CAROUSEL" DE IMG -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home_slider_1.jpg" class="d-block w-100" alt= "home_slider_1">
    </div>
    <div class="carousel-item">
      <img src="img/home_slider_1.jpg" class="d-block w-100" alt="img/home_slider_1">
    </div>
    <div class="carousel-item">
      <img src="img/home_slider_1.jpg" class="d-block w-100" alt="img/home_slider_1">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="home_slider_content">
    <div class="home_slider_subtitle">
    Promociones
    </div>
    <div class="home_slider_title">
      Nueva Colección
    </div>
  </div>
</div>
<div class="container">
  <!-- PROMO -->
  <div class="promo">
    <div class="promo_content">
      <div class="promo_content_subtitle">
        LAS MEJORES
      </div>
      <div class="promo_content_title">
        PROMOS
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <img src="img/promo_1.jpg" alt="pollera-rosa" id="promo">
              <div class="promo_image_content promo_image_content_1">
                <div class="promo_image_title">
                  -30% off
                </div>
                <div class="promo_image_subtitle">
                  EN CARTERAS
                </div>
              </div>
          </div>
          <div class="promo_link">
            <a href="#">VER PRODUCTO</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <img src="img/promo_2.jpg" alt="saco-marron" id="promo">
            <div class="promo_image_content promo_image_content_2">
              <div class="promo_image_title">
                -30% off
              </div>
              <div class="promo_image_subtitle">
                EN ABRIGOS Y SACOS
              </div>
            </div>
          </div>
          <div class="promo_link">
            <a href="#">VER PRODUCTO</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <img src="img/promo_3.jpg" alt="zapatos" id="promo">
            <div class="promo_image_content promo_image_content_3">
              <div class="promo_image_title">
                -25% off
              </div>
              <div class="promo_image_subtitle">
                en Zapatos
              </div>
            </div>
          </div>
          <div class="promo_link">
            <a href="#">VER PRODUCTO</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--NEW ARRIVALS -->
  <div class="arrivals">
    <div class="arrival_content">
      <div class="row">
        <div class="col">
          <div class="arrivals_subtitle">SOLO
          </div>
          <div class="arrivals_title"> LO NUEVO
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="product col-md-4">
        <!--producto 1 -->
          <img src="img/product_1.jpg" alt="sweater" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Sweater Ares</a></div>
          <div class="product_price">$600</div>
        </div>
      </div>
      <!--producto 2 -->
        <div class="col-md-4">
          <img src="img/product_2.jpg" alt="top" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Top Bahamas</a></div>
          <div class="product_price">$350</div>
        </div>
      </div>
      <!--producto 3 -->
      <div class="product col-md-4 ">
          <img src="img/product_3.jpg" alt="remera" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Remera Nashira</a></div>
          <div class="product_price">$400</div>
        </div>
      </div>
      </div>
  </div>
</div>

<!--NEWSLETTER -->
<div class="newsletter">
    <div class="newsletter_image">
      <img src="img/newsletter.jpg" alt="fondo">
    </div>
    <div class="newsletter-content">
      <div class="row">
        <div class="col">
          <div class="newsletter_title_container">
            <div class="newsletter_subtitle">SOLO LO MEJOR</div>
            <div class="newsletter_title">SUSCRIBITE Y OBTENE 20% DE DESCUENTO</div>
          </div>
        </div>
      </div>
      <div class="row newsletter_container">
        <div class="col">
          <div class="newsletter_form_container">
            <form action="#">
              <input type="email" class="newsletter_input" required="required" placeholder="E-mail">
              <button type="submit" class="newsletter_button">SUSCRIBITE</button>
            </form>
          </div>
          <div class="newsletter_text">Para saber sobre actualizaciones exclusivas, nuevas colecciones, eventos, contenidos, promociones y más! Suscribite ahora y obtene 20% de descuento.
            <br> (No acumulable con otras promociones) </div>
        </div>
      </div>
    </div>
</div>

<!--FOOTER -->
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
