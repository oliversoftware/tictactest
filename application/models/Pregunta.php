<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 17/07/14
 * Time: 13:49
 */
require_once(app_dir."config/config.ini.php");
require_once (app_dir."application/models/mysql_bbdd.php");


class Pregunta {



    public function removeTag($id){
        $db= new mysql_bbdd();
        $db->connect();
        $where = "id=".$id;
        $db->delete('tag',$where);
        $res = $db->getResult();
        $db->disconnect();
        return $res;

    }

    public function anadirPregunta($pregunta,$r1,$r2,$r3,$r4,$respuestaCorrecta,$descExplicacion,$bloque,$tema,$examen,$ano,$oposicion,$tipoOposicion){

        $db= new mysql_bbdd();
        $db->connect();
        $db->insert('preguntas',array('pregunta'=>utf8_encode($pregunta),'bloque'=>$bloque,'tema'=>$tema,'examen'=>$examen,'ano'=>$ano,'oposicion'=>$oposicion,'tipoOposicion'=>$tipoOposicion,'r1'=>utf8_encode($r1),'r2'=>utf8_encode($r2),'r3'=>utf8_encode($r3),'r4'=>utf8_encode($r4),'respuestaCorrecta'=>$respuestaCorrecta,'descExplicacion'=>utf8_encode($descExplicacion)));
        $res = $db->getResult();
        $db->disconnect();
        return $res;
    }


    public function getPregunta(){

        $db= new mysql_bbdd();
        $db->connect();
        $db->select('preguntas','pregunta','idPregunta=4');
        $res = $db->getResult();
        $db->disconnect();
        return $res[0];


    }

    public function getTag($id){

        $db= new mysql_bbdd();
        $db->connect();
        $db->select('tag','id,tag_name,texto,id_idioma','id='.$id.'');
        $res = $db->getResult();
        $db->disconnect();
        return $res;


    }

    public function getAllTags($lang){

        $db= new mysql_bbdd();
        $db->connect();

        if($lang=='ALL'){

            $db->select('tag');
        }else {
            $where = "id_idioma='" . $lang . "'";
            $db->select('tag', '*', $where);
        }
        $res = $db->getResult();
        $db->disconnect();
        return $res;


    }

    public function editTag($id,$texto,$id_idioma){

        $db= new mysql_bbdd();
        $db->connect();
        $db->update('tag',array('texto'=>$texto,'id_idioma'=>$id_idioma),'id='.$id.''); // Table name, column names and values, WHERE conditions
        $res = $db->getResult();
        $db->disconnect();
        return $res;


    }

} 