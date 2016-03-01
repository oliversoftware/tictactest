<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 17/07/14
 * Time: 13:49
 */
require_once(app_dir."config/config.ini.php");
require_once (app_dir."application/models/mysql_bbdd.php");


class Usuario
{




    public function getUsuario($nombre)
    {

        $db = new mysql_bbdd();
        $db->connect();
        $where= 'nombre="'.trim($nombre).'"';
        $db->select('usuario', '*', $where);
        $res = $db->getResult();
        $db->disconnect();
        return $res;


    }
}