<?php

require_once DIROOT . '/models/NoticiasModel.php';

class Noticias extends Controller
{
    protected $model;

    public function __construct()
    {
        parent::validateSession();
        $this->model = new NoticiasModel();
        $this->namepag = "noticias";
    }

    public function index()
    {
        header("Location: /admin/noticias/all");
    }

    public function __call($method, $params)
    {
        $params = $params[0];
        $this->listCategorias = $this->model->listarCategorias();
        $isCategoria = array_key_exists($method, $this->listCategorias) || $method == 'all';
        if($isCategoria) {
            $this->pagina = !empty($params[0]) ? $params[0] : 1;
            $ini = (12 * $this->pagina) - 12;
            $ini = ($ini < 0) ? 0 : $ini;
            $this->categoria = $method == 'all' ? '' : $method;
            $this->listNoticias = $this->model->listarNoticias($ini, $this->categoria);
            parent::render('noticias');
        } else {
            die('Error:: Method does not exist.');
        }
    }

    public function eliminarNoticia($param)
    {
        $idnot = $param[0];
        if (is_numeric($idnot)) {
            $result = $this->model->eliminarNoticia($idnot);
            if ($result) echo "OK";
        } else {
            die("Error:: No se está enviando el parámetro correcto");
        }
    }

    public function cambiarEstado($param)
    {
        $idnot = $param[0];
        $estado = $param[1];
        if (is_numeric($idnot)) {
            $result = $this->model->cambiarEstado($idnot, $estado);
            if ($result) echo "OK";
        } else {
            die("Error:: No se está enviando el parámetro correcto");
        }
    }

    protected function listPaginacion($categ, $pag)
    {
        $html = '';
        $categ = empty($categ) ? 'all' : $categ;
        if ($pag == 1) {
            $html .= '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
        } else {
            $html .= '<li class="page-item"><a class="page-link" href="/admin/noticias/' . $categ . '/' . ($pag - 1) . '"><span aria-hidden="true">&laquo;</span></a></li>';
        }
        $npag = ceil($this->model->totalRows() / 12);
        for ($item = 1; $item <= $npag; $item++) :
            $active = ($item == $pag) ? 'active' : '';
            $html .= '<li class="page-item ' . $active . '"><a class="page-link" href="/admin/noticias/' . $categ . '/' . $item . '">' . $item . '</a></li>';
        endfor;
        if ($pag == $npag) {
            $html .= '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
        } else {
            $html .= '<li class="page-item"><a class="page-link" href="/admin/noticias/' . $categ . '/' . ($pag + 1) . '"><span aria-hidden="true">&raquo;</span></a></li>';
        }
        return $html;
    }
}
