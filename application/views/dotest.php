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


var_dump($mc->crearTest($tipoExamen,$tema,$bloque,$ano));






$var= 1;


?>