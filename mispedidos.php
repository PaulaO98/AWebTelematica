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
                                <li><a href="#">MUJER</a>
                                    <ul>
                                        <li><a href="mujer.php?idcategoria=1">BLUSAS</a></li>
                                        <li><a href="mujer.php?idcategoria=2">PRENDA INFERIOR MUJER</a></li>
                                        <li><a href="mujer.php?idcategoria=3">CALZADO MUJER</a></li>
                                        <li><a href="mujer.php?idcategoria=4">VESTIDOS</a></li>
                                    </ul>                                
                                </li>
                                <li><a href="#">HOMBRE</a>
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
        <div class="subm">
        <h1>BIENVENIDO MANUEL</h1>
    </div>
           
    <div class="prendas">
                
    <table >
                <thead>
                    <tr>
                        <th scope="col">ID PEDIDO</th>
                        <th scope="col"> FECHA</th>
                        <th scope="col"> ESTADO </th>
                        <th scope="col"> VER DETALLE </th>
                    </tr>
                </thead>
                <tbody id="lista">
                <?php
                include("conexion.php");
                /* Se realiza la consulta adecuada */
                $result = mysqli_query($con, "SELECT * FROM mispedidos");
                $num=mysqli_num_rows($result);
                for ($i=0; $i<$num; $i++){
                    $row = mysqli_fetch_assoc($result); 
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $row['id_pedido'];?>
                        </th>
                        <td>
                            <?php echo $row['create_date'];?>
                        </td>
                        <th scope="row">
                            <?php echo $row['estado'];?>
                        </th>
                        <th>
                            <a href=""></a>
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