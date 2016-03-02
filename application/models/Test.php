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
            $where='tema='.$tema;
        }elseif($tipoExamen=='BLOQUE'){
            $tipoExamen='B';
            $nombre='EXAMEN BLOQUE '.$bloque;
            $descTipo=$bloque;
            $where='bloque='.$bloque;

        }elseif($tipoExamen=='EXAMEN'){
            $tipoExamen='E';
            $nombre='EXAMEN AÑO '.$ano;
            $descTipo=$ano;
            $where='examen="SI" AND ano='.$ano;
        }elseif($tipoExamen=='SIMULACRO'){
            $tipoExamen='S';
            $nombre='SIMULACRO ALEATORIO '.$fecha;
            $descTipo=0;
        }



        $db= new mysql_bbdd();
        $db->connect();

        $db->insert('test',array('tipo'=>$tipoExamen,'fecha'=>$fecha,'nombre'=>$nombre,'descTipo'=>$descTipo));
        $res = $db->getResult();

        $idTest=$res[0];
        $db->insert('usuarioTest',array('idUsuario'=> $_SESSION['ID_USUARIO'],'idTestu'=>$idTest));

        if($tipoExamen!='SIMULACRO')
        {
            $db->select('preguntas','*',$where);

            $res=$db->getResult();


            foreach ($res as $r){
                $db->insert('testPreguntas',array('idPreguntas'=>$r['idPregunta'] ,'idTest'=>$idTest));

            }
        }else{
            //SIMULACRO HAY QUE HACER TRES SELECT
        }






        $db->disconnect();
        return $res;


    }
}