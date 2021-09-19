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
    <link rel="stylesheet" href="css/style1.css" />
</head>

<body>
    <header class="paginamujer">
        <nav>
            <div class="contenedormovil">
                <a href="index.html">
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
                        <img src="images/logoempresa.jpeg" alt="logoempresa" class="logo" />
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
        <html>
            <head>
                <h1 class="Form-title4">Bienvenido Manuel</h1>
            </head>
            <body>
                <div class="box">
                    <div><h1 class="Form-title2">Seleccione Medio de Pago</h1></div>
                    <div class="verticalLine" size="1500"></div>
                    <div><h1 class="Form-title3">Datos del Comprador</h1></div>
                </div>
            </body>

        <div class="box1">
               
            <div><ul class="menu">
               
            <input type="radio" name="pagar" value="1" class="selection">Tarjeta Débito

            <br>
            
            <input type="radio" name="pagar" value="2" class="selection">Tarjeta Crédito
            
            <br>
            
            <input type="radio" name="pagar" value="3" class="selection">Pago contra Entrega
                  
           <div><h3 class="Form-title5">Paga Seguro!</h3></div>                
                
            </ul>
            
            <img src="images/pago.jpg" class="ipago">
            </div>

            <div>
            
                <div>
                    
                    <pre class="caja"><h3 class="Form-title14">RESUMEN DE COMPRA:</h3>
            <div class="box1">
            <img src="images/zapatoscafe.jpg" class="ipago1">    
            <pre>
    Zapatos hombre
    Color Café
    Talla 38
    Cantidad = 1</pre>
            </div>
                        <h3 class="Form-title14">Valor a pagar: $130.000 COP</h3></pre></div>
            <p class="Form-description3">Pais:</p>
        
            <div class="Form-fields1">
                <input type="text"
                class="ControlInput3 ControlInput3--text"
                placeholder=" "
                required>
         <label for="text"
                class="Control-label3 Control-label3--text">
         </label>
         <div class="Control-requirements Control-requirements--text">
         </div>
                <p class="Form-description3">Ciudad:</p>
                <div class="Form-fields1">
                    <input type="text"
                    class="ControlInput3 ControlInput3--text"
                    placeholder=" "
                    required>
             <label for="text"
                    class="Control-label3 Control-label3--text">
             </label>
             <div class="Control-requirements Control-requirements--text">
             </div>
                    <p class="Form-description3">Dirección:</p>
                    <input type="text"
                           class="ControlInput3 ControlInput3--text"
                           placeholder=" "
                           required>
                    <label for="text"
                           class="Control-label3 Control-label3--text">
                    </label>
                    <div class="Control-requirements Control-requirements--text">
                    </div>
                <p class="Form-description3">Barrio:</p>
                <div class="Form-fields1">
                    <input type="text"
                           class="ControlInput3 ControlInput3--text"
                           placeholder=" "
                           required>
                    <label for="text"
                           class="Control-label3 Control-label3--text">
                    </label>
                    <div class="Control-requirements Control-requirements--text">
                    </div>
                    <p><a href="mispedidos.html" class="pagar">Ir a Pagar</a></p>
                </div>

        </div>

        </htmln>
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

