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
    <link rel="stylesheet" href= "ropa.css">
    <title>Ropa</title>
  </head>
<body>
  <div class="container">

    <header class="header">
      <div class="logo"><a href="home.php">Wish</a></div>
      <nav class="main_nav">
        <ul>
          <li><a href="ropa.php">ROPA</a></li>
          <li><a href="accesorios.php">ACCESORIOS</a></li>
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
        <a href="contacto.php">CONTACTO</a>
        <a href="login.php">LOGIN</a>
        <a href="registro.php">REGISTRARSE</a>

      </div>
    </header>
    <!-- BODY -->

      <div class="ropa">
        <div class="ropa_content">
          <div class="row">
            <div class="col">
              <div class="ropa_subtitle">WISH
              </div>
              <div class="ropa_title"> ROPA
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
        <div class="row">
          <div class="product col-md-4">
            <!--producto 4 -->
            <img src="img/product_5.jpg" alt="vestido" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Vestido Zara</a></div>
              <div class="product_price">$550</div>
            </div>
          </div>
          <!--producto 5 -->
          <div class="col-md-4">
            <img src="img/product_6.jpg" alt="jean" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Jean Amy</a></div>
              <div class="product_price">$750</div>
            </div>
          </div>
          <!--producto 6 -->
          <div class="product col-md-4 ">
            <img src="img/product_8.jpg" alt="pantalon" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Pantalon Louise</a></div>
              <div class="product_price">$700</div>
            </div>
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
              <a href="ropa.php">ROPA</a>
            </li>
            <li>
              <a href="accesorios.php">ACCESORIOS</a>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
