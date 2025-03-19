<?php

require_once DIROOT . '/models/ModalModel.php';
require_once DIROOT . '/models/ArchivosModel.php';

class Modal extends Controller
{
    private $model;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new ModalModel();
        $this->namepag = "modal";
    }

    public function index()
    {
        $filesModel = new ArchivosModel();
        $this->pivotFiles = array();
        $this->pivotFiles['video'] = $filesModel->listarArchivos("/video/");
        $this->pivotFiles['files'] = $filesModel->listarArchivos("/files/");
        $this->pivotFiles['galeria'] = $filesModel->listarArchivos("/img/galeria/");
        $this->modalData = $this->model->obtenerDataModal();
        parent::render('modal');
    }

    public function actualizar()
    {
        if(!empty($_POST)) {
            $titulo = parent::getPost("titulo");
            $cuerpo = parent::getPost("cuerpo");
            $visible = parent::getPost("visible");
            $result = $this->model->actualizarModal([$titulo, trim($cuerpo), $visible]);
            if($result) echo "OK";
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }
}
