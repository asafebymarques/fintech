<?php
class homeController extends Controller {

    public function __construct(){
        parent::__construct();

        $user = new Usuarios();

        if(!$user->isLogged()){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index() {
        $dados = array(
            'nome' => '',
        );

        $user = new Usuarios($_SESSION['twlg']);
        $dados['nome'] = $user->getNome();

        $this->loadTemplate('home', $dados);
    }
}