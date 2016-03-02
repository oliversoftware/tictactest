<?php
/**
 * Created by PhpStorm.
 * User: oliver
 * Date: 1/03/16
 * Time: 18:46
 */
session_start();


require_once '../controllers/Maincontroller.php';

$tipoExamen=$_POST['tipoExamen'];
$tema=$_POST['tema'];
$bloque=$_POST['bloque'];
$ano=$_POST['ano'];

$mc=new Maincontroller();


//$test=$mc->crearTest($tipoExamen,$tema,$bloque,$ano);


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TICTACTEST | Realizar test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>

        .divRespuesta {
            background: #fff;
            margin: 20px;
            border:2px solid grey;
            padding:35px;
        }
        .divRespuesta:focus {
            outline: 1px solid green;
        }

    </style>

</head>

<body style="background: white;">

        <h3>Pregunta</h3>

        <form style="background: white">

            <div >

                <div class="divRespuesta" tabindex="-1">1</div>
                <div  class="divRespuesta" tabindex="-1">2</div>
                <div class="divRespuesta" tabindex="-1">3</div>
                <div class="divRespuesta" tabindex="-1">4</div>

            </div>

            </form>


</body>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>


