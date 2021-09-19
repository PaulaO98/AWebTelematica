<?php

if (!isset($_COOKIE["Token"]))
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <header class="paginageneral">
        <nav>
            <div class="contenedormovil">
                <a href="index.php">
                    <img src="Images/logoempresa.jpeg" alt="logoempresa" class="logo" />
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
                        <img src="Images/logoempresa.jpeg" alt="logoempresa" class="logo" />
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

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <form action="registarproducto.php" method="post" class="mb-3" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nameprenda">Nombre</label>
                            <input type="text" class="form-control" id="nameprenda" aria-describedby="namehelp" autocomplete="name" name="name" required>
                            <small id="namehelp" class="form-text text-muted">Debe escribir un nombre del producto</small>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" id="precio" aria-describedby="preciohelp" autocomplete="number" name="precio" required>
                            <small id="preciohelp" class="form-text text-muted">Debe escribir un precio para el producto</small>
                        </div>
                        <div class="form-group">
                            <label for="talla">Talla</label>
                            <input type="text" class="form-control" id="talla" aria-describedby="tallahelp" autocomplete="name" name="talla" required>
                            <small id="tallahelp" class="form-text text-muted">Debe escribir una talla para el producto</small>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" aria-describedby="cantidadhelp" autocomplete="number" name="cantidad" required>
                            <small id="cantidadhelp" class="form-text text-muted">Debe escribir una cantidad para el producto</small>
                        </div>

                        <div class="form-group">

                            <div class="custom-file">
                                <label class="custom-file-label" for="customFile" id="text">Elige una imagen para tu producto</label>
                                <input type="file" class="custom-file-input" id="customFile" name="imagen">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="selectgeneros">Categoria</label>
                            <select class="custom-select" name="id_categoria">
                            <option value="" disabled selected>Seleccione una Categoria...</option>
                                <?php

                                include("conexion.php");
                                /* Se realiza la consulta adecuada */
                                $result = mysqli_query($con, "SELECT * FROM categorias");
                                $num = mysqli_num_rows($result);
                                for ($i = 0; $i < $num; $i++) {
                                    $row = mysqli_fetch_assoc($result);
                                ?>

                                    <option value=<?php echo $row['id_categoria']; ?>><?php echo $row['name']; ?></option>
       
                                <?php
                                }
                                ?>
                                

                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Registrar</button>
                        <a type="submit" class="btn btn-danger ml-3" href="inventarioadmin.php">Regresar</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="app.js"></script>

    <script>
        document.getElementById("customFile").onchange = function() {
            console.log(this.value);
            document.getElementById("text").innerHTML =
                document.getElementById("customFile").files[0].name;

            // console.log("hola");
        };
    </script>
</body>

</html>