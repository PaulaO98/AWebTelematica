 <!-- Páginas Manuel  Mis pedidos - Usuarios Admin - Pago -->

<?php

    if(!isset($_COOKIE["Token"]))
        header("Location: loginregistro.php");
    
?>


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap");
    </style>

    <link rel="stylesheet" href="css/fontello.css" />
    <link rel="stylesheet" href="css/style2.css" />
</head>

<body>
    <header class="paginamujer">
        <nav>
            <div class="contenedormovil">
                <a href="index.html">
                    <img src="Images/logoempresa.jpeg" alt="logoempresa" class="logo" />
                </a>
                <button class="menu-button" id="menubutton" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-menu"></span>
                </button>
                <div class="menumain" id="menum">
                    <ul class="menu">
                        <li class="menu-item">
                            <a class="menulink" aria-current="page" href="index.html">
                                <span class="icon-home"></span>
                                HOME
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="categorias.html">
                                <span class="icon-t-shirt"></span>
                                CATEGORÍAS
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="mispedidos.html">
                                <span class="icon-clipboard"></span>
                                MIS PEDIDOS
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="carrocompras.html">
                                <span class="icon-carro"></span>
                                COMPRAR
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="loginregistro.html">
                                <span class="icon-user1"></span>
                                LOGIN/REGISTRO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contenedorDesktop">

                <div class="resp">
                    <a href="index.html">
                        <img src="Images/logoempresa.jpeg" alt="logoempresa" class="logo" />
                    </a>
                </div>


                <div class="linksnavmain">

                    <ul class="submenu">
                        <li>
                            <a href="index.html" class="linksnav">
                                <span class="icon-t-shirt"></span>
                                CATEGORÍAS
                            </a>
                            <ul>
                                <li><a href="mujer.html">MUJER</a>
                                    <ul>
                                        <li><a href="mujer.html">BLUSAS</a></li>
                                        <li><a href="mujer.html">CALZADO</a></li>
                                    </ul>
                                
                                </li>
                                <li><a href="hombre.html">HOMBRE</a>
                                    <ul>
                                        <li><a href="hombre.html">CAMISAS</a></li>
                                        <li><a href="hombre.html">CALZADO</a></li>
                                    </ul>
                                
                                </li>
                                
                            </ul>

                        </li>
                        <li>
                            <a href="mispedidos.html" class="linksnav">
                                <span class="icon-clipboard"></span>
                                <span class="linksnavp">MIS</span>
                                <span class="linksnavp">PEDIDOS</span>
        
                            </a>
                        </li>
                        <li>
                            <a href="carrocompras.html" class="linksnav">
                                <span class="icon-carro"></span>
                                COMPRAR
                            </a>
                        </li>
                        <li>
                            <a href="loginregistro.html" class="linksnav">
                                <span class="icon-user1"></span>
                                LOGIN/REGISTRO
                            </a>
                        </li>
                                                                           
                    </ul>                   

                </div>

            </div>

        </nav>

    </header>

    <main>
        <div class="subm">
        <h1>BIENVENIDO MANUEL</h1>
    </div>
    <div class="prendas">
    <section class="container">

        <div class="item"><h1>Mis Pedidos</h1></div>
        <div class="item"></div>
        <div class="item"align="right" ><h1>TOTAL PRODUCTOS = 2 $ 73.000 COP</h1></div>
            
    </section>

    <HR size="5" width="100%" align="center">
                         
    <h2>Camisa polo</h2>
    <img src="Images/polo.jpeg"class="p" align="left"><h2>CAMISA DE HOMBRE Referencia A1 Talla L Color Blanco</h2> 
    <section class="container">

        <div class="item"><h2>Cantidad = 1</h2></div>
        <div class="item"></div>
        <div class="item"align="right" ><h1>$18.000 COP</h1></div>
                     
    </section>
            
    <br clear="left">    
    </div>

    <div class="prendas">
    <h2>vestido largo</h2>
    <img src="Images/modelo.jpg"class="p" align="left"><h2>VESTIDO LARGO MUJER Referencia A2 Talla M Color Verde </h2>
    <section class="container">

        <div class="item"><h2>Cantidad = 1</h2></div>
        <div class="item"></div>
        <div class="item"align="right" ><h1>$55.000 COP</h1></div>
                    
                
    </section>
    <br clear="left">
    </div>
           
    <div class="prendas">
                
    <section class="conta">

        <div class="item"><img style="width:100px; height:100px;" src="Images/circulo2.PNG" alt="Descripción de la imagen" /></div>
        <div  class="item" ><div align="center"> <img style=  "width:100px; height:100px;"  src="Images/circulo2.PNG" alt="Descripción de la imagen" /></div></div>
        <div class="item"><div align="right"><img style="width:100px; height:100px;" src="Images/circulo1.PNG" alt="Descripción de la imagen"/></div></div>
        <div class="item"align="left" ><h1>CONFIRMACION PEDIDO</h1></div>
        <div class="item"align="left" ><h1>EN CAMINO</h1></div>
        <div class="item" ><div align="right"><h1>ENTREGADO</h1></div></div>
                    
        <HR size="5" width="100%" align="center">
            <HR size="5" width="100%" align="center">
                <HR size="5" width="100%" align="center">          
    </section>
                
    </div>
     
    <div align="right"> 
    <a class="button" href="index.html" >
    
        <span class="icon-t-shirt" ></span>
        salir
    </a>
    </div>
    </div>
    </main>

    <footer>
        <div class="footer">
            <div class="contact">
                <h2>Contáctanos</h2>
                <p><span class="icon-phone"></span>3122046328</p>
                <p><span class="icon-phone"></span>3122046328</p>

            </div>

            <div class="redes">
                <h2>Redes Sociales</h2>
                <span class="icon-facebook"></span>
                <span class="icon-instagram"></span>
            </div>

            <div class="mediosp">
                <h2>Medios de Pago</h2>
                <span class="icon-paypal"></span>
                <span class="icon-visa"></span>
                <span class="icon-credit"></span>
                <span class="icon-dollar"></span>
            </div>

        </div>
    </footer>

    <script src="app.js"></script>
</body>

</html>