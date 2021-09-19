<!DOCTYPE php>
<php lang="en">

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
    <header class="paginageneral">
        <nav>
            <div class="contenedormovil">
                <a href="index.php">
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
                            <a class="menulink" href="loginregistro.php">
                                <span class="icon-user1"></span>
                                LOGIN/REGISTRO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contenedorDesktop">

                <div class="resp">
                    <a href="index.php">
                        <img src="Images/logoempresa.jpeg" alt="logoempresa" class="logo" />
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
                                        <li><a href="mujer.php">BLUSAS</a></li>
                                        <li><a href="mujer.php">CALZADO</a></li>
                                    </ul>
                                
                                </li>
                                <li><a href="hombre.php">HOMBRE</a>
                                    <ul>
                                        <li><a href="hombre.php">CAMISAS</a></li>
                                        <li><a href="hombre.php">CALZADO</a></li>
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
                            <a href="loginregistro.php" class="linksnav">
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

        <div class="prendamu">
            <div class="prendamumain">
                <img src="Images/ch1.jpg" class="imgprenmu" />
            </div>
            <div class="textprendamu">
                <h1><b>TACONES ROJO</b></h1>
                <div class="tm1">
                    <p><b>STOCK : </b></p>
                    <p><b>PRECIO : </b></p>
                    <p><b>TALLA : </b></p>
                    <p></p>
                    <p><a href="" class="vermas">AÑADIR</a></p>
                </div>
               
                <div>
                    
                </div>
                
                <p>
                    
                    <a href="#" class="msg"><span class="icon-mail"></span>DESPACHO GRATUITO</p>
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

</php>