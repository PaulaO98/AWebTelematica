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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header class="pagina mujer">
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

        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-xs-12 col-sm-6 col-lg-5 mr-2">

                    <form action="registerUsers.php" method="post">

                        <p class="text-center fw-bold">REGISTRO USUARIOS</p>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Usuario</label>
                            <input required type="text" class="form-control" id="name" autocomplete="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Celular</label>
                            <input required type="number" class="form-control" id="phone" autocomplete="tel" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <input required type="text" class="form-control" id="address" autocomplete="street-address" name="address">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="email" name="email">
                            <div id="emailHelp" class="form-text">Nunca compartas tu email con nadie</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <button type="submit" class="btn btn-dark mb-3">Registrar</button>
                    </form>
                    
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-5">

                    <form action="comprobarUsers.php" method="post">

                        <p class="text-center fw-bold">INICIO SESION USUARIOS</p>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="email" name="email">
                            <div id="emailHelp" class="form-text">Nunca compartas tu email con nadie</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <button type="submit" class="btn btn-dark mb-3">Inicio Sesion</button>
                    </form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>