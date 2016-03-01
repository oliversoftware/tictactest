<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 17/07/14
 * Time: 13:49
 */
require_once(app_dir."config/config.ini.php");
require_once (app_dir."application/models/mysql_bbdd.php");


class Test
{




    public function crearTest($tipoExamen,$tema,$bloque,$ano)
    {

        $fecha= date('Y-m-d H:i:s');

        if($tipoExamen=='TEMA'){
            $tipoExamen='T';
            $nombre='EXAMEN TEMA '.$tema;
            $descTipo=$tema;
        }elseif($tipoExamen=='BLOQUE'){
            $tipoExamen='B';
            $nombre='EXAMEN BLOQUE '.$bloque;
            $descTipo=$bloque;

        }elseif($tipoExamen=='EXAMEN'){
            $tipoExamen='E';
            $nombre='EXAMEN AÑO '.$ano;
            $descTipo=$ano;
        }elseif($tipoExamen=='SIMULACRO'){
            $tipoExamen='S';
            $nombre='SIMULACRO ALEATORIO '.$fecha;
            $descTipo=0;
        }



        $db= new mysql_bbdd();
        $db->connect();
        $db->insert('test',array('tipo'=>$tipoExamen,'fecha'=>$fecha,'nombre'=>$nombre,'descTipo'=>$descTipo));
        $res = $db->getResult();
        $db->insert('usuarioTest',array('idUsuario'=> $_SESSION['ID_USUARIO'],'idTestu'=>$res[0]['idTest']));
        $res=$db->getResult();





        $db->disconnect();
        return $res;


    }
}