<?php

require_once DIROOT . '/models/ArchivosModel.php';
require_once DIROOT . '/models/BannerModel.php';

class Banner extends Controller
{
    private $model;
    private $struct;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new BannerModel();
        $this->struct = $this->model->obtenerBanner();
        $this->namepag = "banner";
    }

    public function index()
    {
        header('Location: /admin/banner/' . $this->struct['tipo']);
    }

    public function slider()
    {
        $this->tipo = 'slider';
        $this->jsondata = '[]';
        if ($this->struct['tipo'] == $this->tipo) :
            $this->jsondata = $this->struct['cuerpo'];
        endif;
        $filesModel = new ArchivosModel();
        $this->imgsBanner = $filesModel->listarArchivos("/img/banner/");
        parent::render('banner');
    }

    public function video()
    {
        $this->tipo = 'video';
        $this->jsondata = array('video' => '', 'control' => true, 'muted' => true, 'repeat' => false);
        if ($this->struct['tipo'] == $this->tipo) :
            $this->jsondata = (array) json_decode($this->struct['cuerpo']);
        endif;
        $filesModel = new ArchivosModel();
        $this->filesVideo = $filesModel->listarArchivos("/video/");
        parent::render('banner');
    }

    public function actualizar()
    {
        if (!empty($_POST)) {
            $params = array();
            $params[] = parent::getPost("tipo");
            $params[] = parent::getPost("cuerpo");
            $result = $this->model->actualizarBanner($params);
            if($result) echo "OK";
        } else {
            die('Error en la solicitud => ' . __METHOD__);
        }
    }
}
