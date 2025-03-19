<?php

require_once DIROOT . '/models/LoginModel.php';

class Login extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function index()
    {
        parent::render('login');
    }

    public function validateSession()
    {
        if (!empty($_POST)) {
            $user = Helpers::cleanString(parent::getPost("name"));
            $pass = Helpers::cleanString(parent::getPost("pass"));
            $resp = $this->model->validarAcceso($user, $pass);
            if ($resp == "OK") {
                session_start();
                session_regenerate_id();
                $_SESSION['auth-name'] = $user;
                $_SESSION['auth-time'] = time();
                echo "OK";
            } else {
                die($resp);
            }
        }
    }

    public function closeSession()
    {
        session_start();
        session_destroy();
        header('Location: ' . WEBURL . '/admin/login');
    }
}
