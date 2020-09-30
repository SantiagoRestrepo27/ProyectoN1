<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tienda</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="multimedia/LogoTiendaNavbar.png" alt="LogoTienda" width="40" height="35">

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
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Del cielo drinks</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form action="carrito.php"><button type="submit" class="btn btn-primary btn-block" name="botonCarrito"> <img src="multimedia/LogoCarritoNavbar.png" alt="LogoCarrito" width="25" height="25"></button>
    </form>
    <li class="nav-item active">
    </li>
   </form>
  </div>
</nav>
    </header>

    <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="multimedia/Carousel1.jpg" class="d-block w-100" alt="Carousel1"  width="1000" height="400">
    </div>
    <div class="carousel-item">
    <img src="multimedia/Carousel2.jpg" class="d-block w-100" alt="Carousel2"  width="1000" height="400">
    </div>
    <div class="carousel-item">
    <img src="multimedia/Carousel3.jpg" class="d-block w-100" alt="Carousel3"  width="1000" height="400">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
    <div class="container">

<div class="row justify-content-center mt-8">
    <div class="col-11">
<br>
        <form action="index.php" method="POST">
            <h3 class="text-left mb-3">Productos</h3>
            <br>
            <div class="row mb-8">
                <div class="col-4">
                    <div class="card" style="width: 20rem;">
                        <img src="multimedia/Producto1.jpg" class="card-img-top" alt="Producto1" width="200" height="350">
                        <div class="card-body">
                         <h5 class="card-title">Sangria de vinotinto</h5>
                         <p class="card-text">Deliciosa sangria hecha a base de vino tinto original taparaca cabernet.</p>
                         <p>Precio: 50.000</p>
                         <a href="carrito.php" class="btn btn-primary">Agregar al carrito</a>
                        </div> 
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem;">
                        <img src="multimedia/Producto2.jpg" class="card-img-top" alt="Producto2" width="200" height="350">
                        <div class="card-body">
                         <h5 class="card-title">Crema de whisky</h5>
                         <p class="card-text">Deliciosa crema de whisky, Baileys artesanal .</p>
                         <p>Precio: 50.000</p>
                         <a href="carrito.php" class="btn btn-primary">Agregar al carrito</a>
                        </div> 
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="card" style="width: 20rem;">
                        <img src="multimedia/Producto3.jpg" class="card-img-top" alt="Producto3" width="200" height="350">
                        <div class="card-body">
                         <h5 class="card-title">Sangria de vino rosa</h5>
                         <p class="card-text">Deliciosa sangria hecha a base de vino rosado sutter home white zifandel.</p>
                         <p>Precio: 50.000</p>
                         <a href="carrito.php" class="btn btn-primary">Agregar al carrito.</a>
                        </div> 
                    </div>
                    </div>
            </div>
            <br>
            <br>
            <div class="row mb-20">
              <div class="col-2"></div>
                <div class="col-4">
                    <div class="card" style="width: 20rem;">
                    <img src="multimedia/Producto4.jpg" class="card-img-top" alt="Producto4" width="200" height="350">
                        <div class="card-body">
                         <h5 class="card-title">Vino Rosado</h5>
                         <p class="card-text">Vino tinto taparaca cabernet sauvignon, gran reserva botella 750ML.
                         (ml a $285.00)
                         </p>
                         <p>Precio: 180.000</p>
                         <a href="carrito.php" class="btn btn-primary">Agregar al carrito</a>
                        </div> 
                    </div>
                </div>
                <div class="col-4">
                <div class="card" style="width: 20rem;">
                <img src="multimedia/Producto5.jpg" class="card-img-top" alt="Producto5" width="200" height="350">
                        <div class="card-body">
                         <h5 class="card-title">Whisky Baileys</h5>
                         <p class="card-text">Baileys original botella 700ML
                          Mezcla entre la crema de leche y el whisky.
                          (ml a $285.00)</p>
                         <p>Precio: 180.000</p>
                         <a href="carrito.php" class="btn btn-primary">Agregar al carrito</a>
                        </div> 
                    </div>                    
                </div>            
            </div>
        <br>
        <hr>
        <br>
        <div class="card-deck">
            <div class="card">
               <img src="multimedia/MuestraMedIzq.jpg" class="card-img-top" alt="MuestraIzq"  width="200" height="250">
            <div class="card-body">
       </div>
         </div>
           <div class="card">
              <video src="multimedia/VideoIndex.mp4" class="card-img-top" alt="VideoIndex"  width="200" height="250" controls autoplay muted loop>
           <div class="card-body">
         </div>
       </div>
           <div class="card">
              <img src="multimedia/MuestraMedDer.jpg" class="card-img-top" alt="MuestraDer"  width="200" height="250">
           </div>
       </div>
<br>
<hr>
        <br>
        <br>
        <div  class="fta">
        <div class="row justify-content-center mt-8">
             <div class="col-5">
               <br>
                  <p>Envíos
                    <br>
                     Realizamos envíos en Danlí y su área metropolitana, sin costo adicional, por compras superiores a $50.000. Para otras ciudades el costo del envío será asumido por el cliente y el pago del envío será contraentrega según las políticas de la empresa transportadora
                  </p>
                  <p>Comunícate con nosotros 
                     <br>
                     WhatsApp. [+504] 9557-4723 <br>                                                               
                     Correo. delcielodrinks@gmail.com
                 </p>
                  <p> Medios de pago
                     <br>
                     Pagos con PSE, Tarjeta Débito y Crédito.
                     Tus pagos están protegidos con nosotros.
                 </p>
             </div>
             <div style="border-left:4px solid #b2b8b2;height:350px;"></div>
             <div class="col-5">
               <br>
                  <p>¿Quienes somos?</p>
                  <p>En Del cielo drinks somos una empresa originaria de guatemala en la cual nos especializamos principalmente en la venta de licores, con un enfoque especial hacia los licores artesanales de los cuales ofrecemos varias deliciosas opciones, nuestros licores son preparados con sumo cuidado brindandole una gran calidad de productos para el consumidor.
                  <br>
                  La empresa ha logrado ubicarse en un lugar muy especial dentro de la comunidad guatemalteca, al poner a su disposición numerosos productos con una gran calidad y valor que han podido llegar hacia muchas personas a lo largo del pais. 
                <br> </p>
             </div>
             </div>
             <br>
        </div>
    </div>
</div>

</div>
    </main>
<br>
<br>
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
      <div class="justify-content-center"><font size=4 color="silver"><img src="multimedia/LogoCorreoFooter.png" alt="LogoLlamada" width="25" height="25"> Perfil Github: SantiagoRestrepo27 <br> derechos reservados <img src="multimedia/LogoDerAutoFooter.png" alt="LogoLlamada" width="25" height="25"></font> </div>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>




