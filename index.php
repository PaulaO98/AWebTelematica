<?php

    if(isset($_COOKIE["Token"]) && $_COOKIE["name"]=="Admin")
        header("Location: usuariosadmin.php");

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
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <nav>
            <div class="contenedormovil">
                <a href="index.php">
                    <img src="images/logoempresa.jpeg" alt="logoempresa" class="logo" />
                </a>
                <button class="menu-button" id="menubutton" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-menu"></span>
                </button>
                <div class="menumain" id="menum">
                    <ul class="menu">
                        <li class="menu-item">
                            <a class="menulink" aria-current="page" href="index.php">
                                <span class="icon-home"></span>
                                HOME
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="categorias.php">
                                <span class="icon-t-shirt"></span>
                                CATEGORÍAS
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="mispedidos.php">
                                <span class="icon-clipboard"></span>
                                MIS PEDIDOS
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href="carrocompras.php">
                                <span class="icon-carro"></span>
                                COMPRAR
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menulink" href=
                            <?php 
                            
                            if(isset($_COOKIE["name"])){

                                echo "logout.php";
                            }

                            else{

                                echo "loginregistro.php";

                            }
        
                            
                            ?> >
                                <span class="icon-user1"></span>

                                <?php
                                    if(isset($_COOKIE["name"])){

                                        echo $_COOKIE["name"];
                                    }

                                    else{

                                        echo "LOGIN/REGISTRO";

                                    }
                                ?>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contenedorDesktop">
                <div class="resp">
                    <a href="index.php">
                        <img src="images/logoempresa.jpeg" alt="logoempresa" class="logo" />
                    </a>
                </div>
                <div class="linksnavmain">
                    <ul class="submenu">
                        <li>
                            <a href="index.php" class="linksnav">
                                <span class="icon-t-shirt"></span>
                                CATEGORÍAS
                            </a>    
                            <ul>
                                <li><a href="mujer.php">MUJER</a>
                                    <ul>
                                        <li><a href="mujer.php?idcategoria=1">BLUSAS</a></li>
                                        <li><a href="mujer.php?idcategoria=2">PRENDA INFERIOR MUJER</a></li>
                                        <li><a href="mujer.php?idcategoria=3">CALZADO MUJER</a></li>
                                        <li><a href="mujer.php?idcategoria=4">VESTIDOS</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="hombre.php">HOMBRE</a>
                                    <ul>
                                        <li><a href="hombre.php?idcategoria=5">CAMISAS</a></li>
                                        <li><a href="hombre.php?idcategoria=6">CALZADO HOMBRE</a></li>
                                        <li><a href="hombre.php?idcategoria=7">PRENDA INFERIOR HOMBRE</a></li>                                        
                                    </ul>                                
                                </li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="mispedidos.php" class="linksnav">
                                <span class="icon-clipboard"></span>
                                <span class="linksnavp">MIS</span>
                                <span class="linksnavp">PEDIDOS</span>
        
                            </a>
                        </li>
                        <li>
                            <a href="carrocompras.php" class="linksnav">
                                <span class="icon-carro"></span>
                                COMPRAR
                            </a>
                        </li>
                        <li>
                            <a href=<?php 
                            
                            if(isset($_COOKIE["name"])){

                                echo "logout.php";
                            }

                            else{

                                echo "loginregistro.php";

                            }
        
                            
                            ?> 
                            
                            class="linksnav">
                                <span class="icon-user1"></span>
                                
                                <?php
                                    if(isset($_COOKIE["name"])){

                                        echo $_COOKIE["name"];
                                    }

                                    else{

                                        echo "LOGIN/REGISTRO";

                                    }
                                ?>
                            </a>
                        </li>                                                                           
                    </ul>                
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/fondo1.jpg" class="s1" />
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/fondo2.jpg" class="s1" />                
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/fondo3.jpg" class="s1" />
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        
        <div style="text-align: center" class="slideimg">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="ser">
            <div class="quienes">
                <h1>¿QUIENES SOMOS?</h1>
                <P>En tienda MAPALE, una empresa dedicada a la venta de ropa y calzado de segunda mano, contribuyendo potencialmente al medio ambiente y a la inmersión de nuevas ideas. 
                    Trabajamos a diario por tener exito y cumplir cada una de las metas, una empresa llena de motivación, valores y compromiso total con nuestros clientes.</P>
            </div>
            <div class="imgser">
                <img src="images/ser.jpeg" class="s1" />
            </div>            
        </div>
        <div class="prendasme">
            <div class="prendas">
                <img src="images/zapatosca.jpg" class="p"/>
                <div class="esp">
                    <h3>Zapato Café</h3>
                    <P class="textp">Unidades: </P>
                    <p><a href="hombre.php" class="vermas">VER MÁS</a></p>
                </div>
            </div>
            <div class="prendas">
                <img src="images/jeans.jpg" class="p" />
                <div class="esp">
                    <h3>Jeans</h3>
                    <P class="textp">Unidades: </P>
                    <p></p><a href="mujer.php" class="vermas">VER MÁS</a></p>
                </div>
            </div>
            <div class="prendas">
                <img src="images/blusarosa.jpg" class="p" />
                <div class="esp">
                    <h3>Blusa Rosa</h3>
                    <P class="textp">Unidades: </P>
                    <p><a href="mujer.php" class="vermas">VER MÁS</a></p>
                </div>
            </div>          
            <div class="prendas">
                <img src="images/tillanegra.jpg" class="p" />
                <div class="esp">
                    <h3>Tennis Negros</h3>
                    <P class="textp">Unidades: </P>
                    <p><a href="mujer.php" class="vermas">VER MÁS</a></p>
                </div>

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
                <span class="icon-twitter"></span>
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