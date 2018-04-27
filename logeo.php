<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title>
                    Document
                </title>
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
                </link>
                <link href="css/estilos.css" rel="stylesheet" type="text/css">
                </link>
                <link href="fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <!--Ventana para usuarios registrados-->
        <!--Mandar una alerta a personas que no ingresaron bien sus usuarios-->
        <div id="contenedor">
            <br>
                <div class="form-group">
                    <div class="col-lg-12">
                        <h2 class="titulo">
                            NARI`
                        </h2>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <img class="center-block tamaño" src="img/2.png">
                        </img>
                    </div>
                </div>
                <br>
                    <form action="post_logeo.php" class="form-horizontal" method="POST" role="form">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" id="ejemplo_email_3" name="nombre" placeholder="Usuario" type="text">
                                </input>
                            </div>
                        </div>
                        <br>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input class="form-control" id="ejemplo_email_3" name="contrasena" placeholder="Constraseña" type="password">
                                    </input>
                                </div>
                            </div>
                        </br>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button class="btn btn-danger btn-block" type="submit">
                                    Acceder
                                </button>
                            </div>
                        </div>
                        <!--Enlace para usuarios no registrados-->
                        <div class="form-group registro">
                            <div class="col-lg-12">
                                <a href="registro.php">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </form>
                </br>
            </br>
        </div>
    </body>
</html>
<script src="js/jquery-3.3.1.min.js" type="text/javascript">
</script>
<script src="js/popper.min.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>
