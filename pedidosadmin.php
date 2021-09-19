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
                <div class="linksnavmain" style="display:flex;justify-content:end">

                    <a href="logout.php" class="linksnav">
                        <span class="icon-user"></span>
                        ADMIN
                        <span class="icon-salir"></span>
                    </a>
                </div>

            </div>

            <div class="contenedorDesktop">
                <div class="resp">
                    <a href="index.php">
                        <img src="images/logoempresa.jpeg" alt="logoempresa" class="logo" />
                    </a>
                </div>
                <div class="linksnavmain">

                    <a href="logout.php" class="linksnav">
                        <span class="icon-user"></span>
                        ADMIN
                        <span class="icon-salir"></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>

    
        <div class="subm">
            <a href="admin.html" class="linkgeneral">
                <P class="submujer">ADMIN</P>
            </a>
            <div class="linksm ">
                <a href="pedidosadmin.php" class="linkgeneral">
                    <p class="subm1">Pedidos</p>
                </a>
                <a href="inventarioadmin.php" class="linkgeneral">
                    <p class="subm1">Inventario Productos</p>
                </a>
                <a href="usuariosadmin.php" class="linkgeneral active">
                    <p class="subm1">Usuarios</p>
                </a>
            </div>
        </div>
        <div class="tabla">
            <table >
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