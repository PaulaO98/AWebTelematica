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
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<header class="paginageneral">
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
                            <a class="menulink" href="categorias.html">
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
                                        <li><a href="mujer.php">BLUSAS</a></li>
                                        <li><a href="mujer.php">PRENDA INFERIOR MUJER</a></li>
                                        <li><a href="mujer.php">CALZADO MUJER</a></li>
                                        <li><a href="mujer.php">VESTIDOS</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="hombre.html">HOMBRE</a>
                                    <ul>
                                        <li><a href="hombre.php">CAMISAS</a></li>
                                        <li><a href="hombre.php">CALZADO HOMBRE</a></li>
                                        <li><a href="hombre.php">PRENDA INFERIOR HOMBRE</a></li>                                        
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
    <img src="images/polo.jpeg"class="p" align="left"><h2>CAMISA DE HOMBRE Referencia A1 Talla L Color Blanco</h2> 
    <section class="container">

        <div class="item"><h2>Cantidad = 1</h2></div>
        <div class="item"></div>
        <div class="item"align="right" ><h1>$18.000 COP</h1></div>
                     
    </section>
            
    <br clear="left">    
    </div>

    <div class="prendas">
    <h2>vestido largo</h2>
    <img src="images/modelo.jpg"class="p" align="left"><h2>VESTIDO LARGO MUJER Referencia A2 Talla M Color Verde </h2>
    <section class="container">

        <div class="item"><h2>Cantidad = 1</h2></div>
        <div class="item"></div>
        <div class="item"align="right" ><h1>$55.000 COP</h1></div>
                    
                
    </section>
    <br clear="left">
    </div>
           
    <div class="prendas">
                
    <table >
                <thead>
                    <tr>
                        <th scope="col">ID PEDIDO</th>
                        <th scope="col"> FECHA</th>
                        <th scope="col"> VALOR TOTAL PEDIDO </th>
                        <th scope="col"> DIRECCIÓN </th>
                        <th scope="col">EMAIL</th>

                    </tr>

                </thead>

                <tbody id="lista">
                <?php

                include("conexion.php");
                /* Se realiza la consulta adecuada */
                $result = mysqli_query($con, "SELECT * FROM users");
                $num=mysqli_num_rows($result);
                for ($i=0; $i<$num; $i++){
                    $row = mysqli_fetch_assoc($result); 
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $row['id_usuario'];?>
                        </th>
                        <td>
                            <?php echo $row['name'];?>
                        </td>
                        <th scope="row">
                            <?php echo $row['phone'];?>
                        </th>
                        <td>
                            <?php echo $row['address'];?>
                        </td>
                        <th scope="row">
                            <?php echo $row['email'];?>
                        </th>

                    </tr>
                    <?php 
                }  
                    ?>
                </tbody>

            </table>



                
    </div>
     
    <div align="right"> 
    <a class="button" href="index.php" >
    
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