<?php

require_once DIROOT . '/models/HomeModel.php';

class Home extends Controller
{

    private $model;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new HomeModel();
        $this->namepag = "home";
    }

    public function index()
    {
        $this->dataweb = $this->model->obtenerDatos();
        parent::render('home');
    }

    public function actualizar()
    {
        if (!empty($_POST)) {
            $params = array();
            $params[] = parent::getPost("nombre");
            $params[] = parent::getPost("telefono");
            $params[] = parent::getPost("celular");
            $params[] = parent::getPost("direction");
            $params[] = parent::getPost("correo");
            $params[] = parent::getPost("metades");
            $params[] = parent::getPost("facebook");
            $params[] = parent::getPost("instagram");
            $params[] = parent::getPost("whatsapp");
            $params[] = parent::getPost("youtube");
            $params[] = parent::getPost("twitter");
            $params[] = parent::getPost("intranet");
            $params[] = parent::getPost("liblink");
            $params[] = parent::getPost("libmail");
            $result = $this->model->actualizarDatos($params);
            if ($result) echo "OK";
        } else {
            die();
        }
    }
}
