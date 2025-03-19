<?php

require_once DIROOT . '/models/RevistaModel.php';

class Revista extends Controller
{
    private $model;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new RevistaModel();
        $this->namepag = "revista";
    }

    public function index()
    {
        $this->listRevista = $this->model->getListRevista();
        $this->listRevista = json_encode($this->listRevista, JSON_UNESCAPED_UNICODE);
        parent::render('revista');
    }

    public function guardar()
    {
        if (!empty($_POST)) :
            $params = array();
            $params[] = parent::getPost("nombre");
            $params[] = parent::getPost("enlace");
            $params[] = parent::getPost("fecreg");
            $result = $this->model->guardarRevista($params);
            if ($result) {
                echo $result;
            } else {
                echo '';
            }
        endif;
    }

    public function editar()
    {
        if (!empty($_POST)) :
            $params = array();
            $params[] = parent::getPost("nombre");
            $params[] = parent::getPost("enlace");
            $params[] = parent::getPost("fecreg");
            $params[] = parent::getPost("idrev");
            $result = $this->model->editarRevista($params);
            if ($result) echo "OK";
        endif;
    }

    public function eliminar($params)
    {
        if (!empty($params)) {
            $id = $params[0];
            $resp = $this->model->eliminarRevista($id);
            if ($resp) echo "OK";
        }
    }
}
