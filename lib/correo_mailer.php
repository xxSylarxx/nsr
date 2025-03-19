<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'correo.cubicol.com.pe';
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    //Modificar
    //Recipients
    //$mail->setFrom('alexanderfleming@cubicol.com.pe', 'ALEXANDER FLEMING');
    $mail->setFrom('alexanderfleming@cubicol.com.pe');
    $mail->FromName = 'PAG. WEB';
    //$mail->addAddress('geraldochoa@alexanderfleming.edu.pe', 'ALEXANDER FLEMING');
    //$mail->addCC('karina.coordinacionweb@gmail.com');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'SOLICITUD DE CONSULTA VIA PAG.WEB';
    $mail->Body    = '
            <h4><b>INFORMACIÓN - ALEXANDER FLEMING</b></h4>
            <p><b>Nombres : </b>' . $_POST['nombre'] . '</p>
            <p><b>Correo : </b>' . $_POST['correo'] . '</p>
            <p><b>Consulta : </b>' . $_POST['consulta'] . '</p>';
    if ($mail->Send()) {
        echo "SE ENVIO LA CONSULTA CORRECTAMENTE";
    }
} catch (Exception $e) {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}