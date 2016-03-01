<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 17/07/14
 * Time: 12:48
 */
session_start();
include '../../config/config_path.php';
include '../../config/config.ini.php';
require_once (app_dir.'application/libs/PHPMailerAutoload.php');
require_once (app_dir.'application/libs/class.phpmailer.php');
require_once (app_dir.'application/libs/class.pop3.php');
require_once (app_dir.'application/libs/class.smtp.php');
require_once (app_dir.'application/models/Pregunta.php');
require_once (app_dir.'application/models/Usuario.php');



class Maincontroller
{

    public function crearTest($tipoExamen,$tema,$bloque,$ano){
        $t= new Test();

        return $t->crearTest($tipoExamen,$tema,$bloque,$ano);
    }

    public function getUsuario($nombre){

        $u= new Usuario();

        return $u->getUsuario($nombre);

    }

    public function getTotalPreguntas(){
        $p = new Pregunta();

        $r= $p->getTotalPreguntas();
        return $r;
    }


    public function getPregunta(){
        $p = new Pregunta();

        $r= $p->getPregunta();
        return utf8_decode($r['pregunta']);
    }

    public function crearPregunta($pregunta,$r1,$r2,$r3,$r4,$respuestaCorrecta,$descExplicacion,$bloque,$tema,$examen,$ano,$oposicion,$tipoOposicion){
        $p= new Pregunta();

        return $p->anadirPregunta($pregunta,$r1,$r2,$r3,$r4,$respuestaCorrecta,$descExplicacion,$bloque,$tema,$examen,$ano,$oposicion,$tipoOposicion);



    }

    public function sendMail($emailDest, $nombreDest, $contenido, $tipo)
    {
        //Crear una instancia de PHPMailer
        $mail = new PHPMailer();
        //Definir que vamos a usar SMTP
        $mail->IsSMTP();
        //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
        // 0 = off (producción)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ahora definimos gmail como servidor que aloja nuestro SMTP
        $mail->Host = HOST;
        //El puerto será el 587 ya que usamos encriptación TLS
        $mail->Port = PORT;
        //Definmos la seguridad como TLS
        $mail->SMTPSecure = SMTPSECURE;
        //Tenemos que usar gmail autenticados, así que esto a TRUE
        $mail->SMTPAuth = SMTPAUTH;
        //Definimos la cuenta que vamos a usar. Dirección completa de la misma
        $mail->Username = USERNAME;
        //Introducimos nuestra contraseña de gmail
        $mail->Password = PASSWORD;
        //Definimos el remitente (dirección y, opcionalmente, nombre)
        $mail->SetFrom(SETFROMEMAIL, SETFROMNAME);
        //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
        //$mail->AddReplyTo('replyto@correoquesea.com','El de la réplica');
        //Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
        $mail->AddAddress($emailDest, $nombreDest);
        //Definimos el tema del email

        //Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
        if ($tipo == 1) {
            /*Email para el administrador*/
            $mail->Subject = 'Contacto, FRESCOSECHA';
            $file = str_replace('[NOMBRE]', $_SESSION['NOMBRE'], file_get_contents(app_dir.'application/plantillasEmail/emailContacto.php'));
            $file = str_replace('[EMAIL]', $_SESSION['EMAIL'], $file);
            $file = str_replace('[MENSAJE]', $_SESSION['MENSAJE'], $file);
            $file = str_replace('[TELEFONO]', $_SESSION['TELEFONO'], $file);
            $file = str_replace('[BASE_URL]', BASE_URL, $file);
            $mail->MsgHTML($file);


        } else if ($tipo == 2) {
            /*Email para el administrador*/
            $mail->Subject = 'Contacto, FRESCOSECHA';
            $file = str_replace('[NOMBRE]', $_SESSION['NOMBRE'], file_get_contents(app_dir.'application/plantillasEmail/emailGraciasContacto.php'));
            $file = str_replace('[EMAIL]', $_SESSION['EMAIL'], $file);
            $file = str_replace('[MENSAJE]', $_SESSION['MENSAJE'], $file);
            $file = str_replace('[TELEFONO]', $_SESSION['TELEFONO'], $file);
            $file = str_replace('[BASE_URL]', BASE_URL, $file);
            $mail->MsgHTML($file);



        }


        //Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
        $mail->CharSet = 'UTF-8';

        //$mail->AltBody = 'This is a plain-text message body';
        //Enviamos el correo
        if (!$mail->Send()) {
            //return $mail->ErrorInfo;
            return 0;
        } else {
            return 1;
        }


    }


}