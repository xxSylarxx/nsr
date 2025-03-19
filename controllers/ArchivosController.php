<?php

require_once DIROOT . '/models/ArchivosModel.php';

class Archivos extends Controller
{
    public $model;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new ArchivosModel();
        $this->namepag = "archivos";
    }

    public function index()
    {
        parent::render('archivos');
    }

    public function guardar()
    {
        if (!empty($_POST) && !empty($_FILES)) {
            $path = parent::getPost('path');
            $file = $_FILES['file']['tmp_name'];
            $resp = $this->model->guardarArchivo($path, $file);
            if ($resp) {
                echo "OK";
            } else {
                die("No se pudo guardar el archivo");
            }
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }

    public function eliminar()
    {
        if (!empty($_POST)) {
            $path = parent::getPost('path');
            $resp = $this->model->eliminarArchivo($path);
            if ($resp) {
                echo "OK";
            } else {
                die("No se pudo eliminar el archivo");
            }
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }

    public function listar($params)
    {
        if (!empty($_POST)) {
            $pivotFiles = $this->model->listarArchivos(parent::getPost("path"));
            echo json_encode($pivotFiles, JSON_UNESCAPED_UNICODE);
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }
}
