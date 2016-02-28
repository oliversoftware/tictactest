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
        $db->insert('preguntas',array('pregunta'=>$pregunta,'bloque'=>$bloque,'tema'=>$tema,'examen'=>$examen,'ano'=>$ano,'oposicion'=>$oposicion,'tipoOposicion'=>$tipoOposicion,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'respuestaCorrecta'=>$respuestaCorrecta,'descExplicacion'=>$descExplicacion));
        $res = $db->getResult();
        $db->disconnect();
        return $res;
    }


    public function getTraduccion($cod_idioma){

        $db= new mysql_bbdd();
        $db->connect();
        $db->select('tag','tag_name,texto,id','id_idioma='.$cod_idioma.'');
        $res = $db->getResult();
        $db->disconnect();
        return $res;


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