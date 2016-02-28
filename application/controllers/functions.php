<?php

session_start();
include_once '../../config/config_path.php';
include_once '../../config/config.ini.php';
require_once (app_dir.'application/controllers/Maincontroller.php');

if (isset($_GET['idFuncion'])){

    $var= $_GET['idFuncion'];
}else{

    $var= $_POST['idFuncion'];
}
switch ($var) {

    case 1:
        /*Envio de email*/
        $form = array();
        parse_str($_GET['form'], $form);
        $mc= new Maincontroller();
        $pregunta=$form['pregunta'];
        $r1=$form['r1'];
        $r2=$form['r2'];
        $r3=$form['r3'];
        $r4=$form['r4'];
        $respuestaCorrecta=$form['respuestaCorrecta'];
        $descExplicacion=$form['descExplicacion'];
        $bloque=$form['bloque'];
        $tema=$form['tema'];
        $examen=$form['examen'];
        $ano=$form['ano'];
        $oposicion=$form['oposicion'];
        $tipoOposicion=$form['tipoOposicion'];
        //EMAIL AL USUARIO
        //$mc->sendMail($email,$nombre,$contenido,2);
        //EMAIL AL ADMINISTRADOR
        // echo $mc->sendMail(EMAILDESTINOCONTACTO,$nombre,$contenido,1);

        return $mc->crearPregunta($pregunta,$r1,$r2,$r3,$r4,$respuestaCorrecta,$descExplicacion,$bloque,$tema,$examen,$ano,$oposicion,$tipoOposicion);




        break;

    default:
        break;


}