<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once DIROOT . '/core/lib/PHPMailer/PHPMailer.php';

class Email extends Controller
{

    private $objmail;

    public function __construct()
    {
        $this->objmail = new PHPMailer();
        $this->objmail->CharSet = 'UTF-8';
        $this->objmail->IsHTML(true);
        $this->objmail->isSMTP();
        $this->objmail->SMTPDebug  = false;
        $this->objmail->SMTPSecure = '';
        $this->objmail->Host = 'correo.cubicol.com.pe';
        $this->objmail->SMTPAuth = false;
        $this->objmail->Port = 25;
        $this->objmail->From = 'abrahamvaldelomar@cubicol.com.pe';
        $this->objmail->FromName = 'Página Web';
    }

    public function contacto()
    {
        if (!empty($_POST)) {
            $this->objmail->AddAddress('ymca.cav@ymcaperu.edu.pe', 'COLEGIO YMCA ABRAHAM VALDELOMAR');
            $this->objmail->Subject = 'SOLICITUD DE CONSULTA VÍA PAG.WEB';
            $this->objmail->Body = '
            <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombre : </b>' . parent::getPost('nombre') . '</p>
            <p><b>Correo : </b>' . parent::getPost('correo') . '</p>
            <p><b>Consulta : </b>' . parent::getPost('consulta') . '</p>';
            if ($this->objmail->Send()) {
                echo "SOLICITUD ENVIADO CORRECTAMENTE";
            } else {
                echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
            }
        }
    }
}
