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

                    <a href="index.html" class="linksnav">
                        <span class="icon-user"></span>
                        ADMIN
                        <span class="icon-salir"></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>

    <?php include("conexion.php"); ?>
        <div class="subm">
            <a href="admin.html" class="linkgeneral">
                <P class="submujer">ADMIN</P>
            </a>
            <div class="linksm ">
                <a href="inventarioadmin.html" class="linkgeneral">
                    <p class="subm1">Pedidos</p>
                </a>
                <a href="inventarioadmin.html" class="linkgeneral">
                    <p class="subm1">Inventario</p>
                </a>
                <a href="usuariosadmin.html" class="linkgeneral active">
                    <p class="subm1">Usuarios</p>
                </a>
            </div>
        </div>
        <div class="tabla">
            <table border="1px">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> NOMBRE USUARIO </th>
                        <th scope="col"> TELEFONO </th>
                        <th scope="col"> DIRECCIÓN </th>
                        <th scope="col">EMAIL</th>

                    </tr>

                </thead>

                <tbody id="lista">
                    <?php
                /* Se realiza la consulta adecuada */
                $result = mysqli_query($link, "SELECT * FROM users");
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