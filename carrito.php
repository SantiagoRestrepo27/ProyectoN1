<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Carrito</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="multimedia/LogoTiendaNavbar.png" alt="LogoTienda" width="25" height="25">

  </svg>   Del cielo Drinks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Pagina principal <span class="sr-only">(current)</span></a>
      </li>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Mas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Registro <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Del cielo Drinks</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form action="carrito.php"><button type="submit" class="btn btn-primary btn-block" name="botonCarrito"><img src="multimedia/LogoCarritoNavbar.png" alt="LogoCarrito" width="25" height="25"></button>
    </form>
  </div>
</nav>
    </header>
    <main>
    <div class="container">

<div class="row justify-content-center mt-5">
    <div class="col-6">

        <form action="carrito.php" method="POST">
            <h3 class="text-center mb-5">Factura de Compra</h3>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                    <br>
                    <input type="text" class="form-control" placeholder="Producto 2" name="producto2">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                    <br>
           
                    <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Producto 3" name="producto3"> 
                    <br> 
                    <input type="text" class="form-control" placeholder="Producto 4" name="producto4">
                    <br>
                    <input type="text" class="form-control" placeholder="Producto 5" name="producto5">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio($)" name="precio3">
                    <br>
                    <input type="number" class="form-control" placeholder="Precio($)" name="precio4">
                    <br>
                    <input type="number" class="form-control" placeholder="Precio($)" name="precio5">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="botoningresar">Calcular</button>
            </div>
            

        </form>
    </div>
</div>

<div class="row justify-content-center mt-2" >
<?php if(isset($_POST["botoningresar"])): ?>

  <h6 class="mt-5"> 
      <?php

          $precio1=$_POST["precio1"];
          $producto1=$_POST["producto1"];

          $precio2=$_POST["precio2"];
          $producto2=$_POST["producto2"];

          $precio3=$_POST["precio3"];
          $producto3=$_POST["producto3"];

          $precio4=$_POST["precio4"];
          $producto4=$_POST["producto4"];

          $precio5=$_POST["precio5"];
          $producto5=$_POST["producto5"];

          $total=$precio1+$precio2+$precio3+$precio4+$precio5;

          echo("El producto 1 es: ".$producto1." -----($) ".$precio1);
          echo("<br>");
          echo("El producto 2 es: ".$producto2." -----($) ".$precio2);
          echo("<br>");
          echo("El producto 3 es: ".$producto3." -----($) ".$precio3);
          echo("<br>");
          echo("El producto 4 es: ".$producto4." -----($) ".$precio4);
          echo("<br>");
          echo("El producto 5 es: ".$producto5." -----($) ".$precio5);
          echo("<br>");
          echo("<br>");
          echo("********************************************");
          echo("<br>");
          echo("El total de la compra fué de: ".$total);

      ?>
  </h6>
<?php endif ?>
</div>
<br>

</div>
    </main>

    <footer class="footer">
      <br>
      <hr>
      <div class="row justify-content-center mt-8">
        <div class="col-5">
        <font size=5 color="silver">Informacion de la tienda</font>
        <hr>
        <p class="footer_index"><img src="multimedia/LogoUbicacionFooter.png" alt="LogoUbicacion" width="25" height="25"> Tienda de comestibles Del cielo drinks. Plaza las colinas,Danlí.</p>
        <p class="footer_index"><img src="multimedia/LogoLlamadaFooter.png" alt="LogoLlamada" width="25" height="25"> Numero de contacto: +504 9557-4723</p>
        </div>
        <div style="border-left:4px solid  #424242;height:80px;"></div>
        <div class="col-5">
        <font size=5 color="silver">Siguenos en nuestras redes sociales</font>
        <hr>
        <p class="footer_index"><img src="multimedia/LogoFacebookFooter.png" alt="LogoFacebook" width="25" height="25"> Encuentranos en facebook como: Del cielo drinks</p>
        <p class="footer_index"><img src="multimedia/LogoInstagramFooter.png" alt="LogoInstagram" width="25" height="25">  Encuentranos en Instagram como: @delcielodrinks</p>
        </div>
      </div>
      <hr color="silver">
      <div class="justify-content-center"><font size=4 color="silver"><img src="multimedia/LogoCorreoFooter.png" alt="LogoLlamada" width="25" height="25"> Perfil Github: SantiagoRestrepo27  <br> derechos reservados <img src="multimedia/LogoDerAutoFooter.png" alt="LogoLlamada" width="25" height="25"></font> </div>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
