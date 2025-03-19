<?php

require_once DIROOT . '/models/NoticiasModel.php';
include_once DIROOT . '/models/ArchivosModel.php';

class Editor extends Controller
{
    private $model = null;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new NoticiasModel();
        $this->namepag = "noticias";
    }

    public function index()
    {
        $this->action = "guardar";
        $this->noticiaInfo = array();
        $this->noticiaInfo['idnot'] = null;
        $this->noticiaInfo['idcat'] = '1';
        $this->noticiaInfo['fecpub'] = date("Y-m-d");
        $this->noticiaInfo['titulo'] = null;
        $this->noticiaInfo['cuerpo'] = null;
        $this->noticiaInfo['portada'] = null;
        $this->noticiaInfo['detalle'] = null;
        /* carga de archivos */
        $filesmodel = new ArchivosModel();
        $this->pivotFiles = array();
        $this->pivotFiles['galeria'] = $filesmodel->listarArchivos("/img/galeria/");
        $this->pivotFiles['video'] = $filesmodel->listarArchivos("/video/");
        $this->pivotFiles['files'] = $filesmodel->listarArchivos("/files/");
        $this->listCategorias = $this->model->listarCategorias();
        parent::render("editor");
    }

    public function vista($param)
    {
        $idnot = $param[0];
        if (is_numeric($idnot)) {
            $this->action = "editar";
            $this->noticiaInfo = $this->model->buscarNoticia($idnot);
            /* carga de archivos */
            $filesmodel = new ArchivosModel();
            $this->pivotFiles = array();
            $this->pivotFiles['galeria'] = $filesmodel->listarArchivos("/img/galeria/");
            $this->pivotFiles['video'] = $filesmodel->listarArchivos("/video/");
            $this->pivotFiles['files'] = $filesmodel->listarArchivos("/files/");
            $this->listCategorias = $this->model->listarCategorias();
            parent::render("editor");
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }

    public function guardar()
    {
        if (!empty($_POST)) {
            $datos = array();
            $datos[] = parent::getPost("categ");
            $datos[] = parent::getPost("titulo");
            $datos[] = Helpers::formatSlug(parent::getPost("titulo"));
            $datos[] = parent::getPost("portada");
            $datos[] = parent::getPost("detalle");
            $datos[] = parent::getPost("cuerpo");
            $datos[] = parent::getPost("fecpub");
            $result = $this->model->guardarNoticia($datos);
            if ($result) echo "OK";
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }

    public function editar()
    {
        if (!empty($_POST)) {
            $datos = array();
            $datos[] = parent::getPost("categ");
            $datos[] = parent::getPost("titulo");
            $datos[] = Helpers::formatSlug(parent::getPost("titulo"));
            $datos[] = parent::getPost("portada");
            $datos[] = parent::getPost("detalle");
            $datos[] = parent::getPost("cuerpo");
            $datos[] = parent::getPost("fecpub");
            $datos[] = parent::getPost("idnot");
            $result = $this->model->editarNoticia($datos);
            if ($result) echo "OK";
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }
}
