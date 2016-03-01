<?php
session_destroy();
include '../../config/config_path.php';
include '../../config/config.ini.php';

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TICTACTEST | Acceso</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">Bienvenido a TICTACTEST</h2>

            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>

            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <form class="m-t" role="form" method="post" action="<?php echo BASE_URL_BACKEND?>index.php">


                    <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo $_GET['error'];?>!</strong>
                    </div>

                    <?php }?>
                    <div class="form-group">
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Acceder</button>

                    <a href="#">
                        <small>¿Olvidaste la contraseña?</small>
                    </a>

                    <p class="text-muted text-center">
                        <small>¿No tienes cuenta?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="register.html">Crear una cuenta</a>
                </form>
                <p class="m-t">
                    <small>TICTACTEST &copy; <?php echo date('Y')?></small>
                </p>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright TICTACTEST
        </div>
        <div class="col-md-6 text-right">
            <small>©<?php echo date('Y')?></small>
        </div>
    </div>
</div>

</body>

</html>
