<?php
class loginController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $dados = array();

        if(isset($_POST['user']) && !empty($_POST['pass'])){
            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);

            $users = new Usuarios();

            if($users->fazerLogin($user,$pass)){
                header("Location: ".BASE_URL);
            }
        }

        $this->loadView('login',$dados);
    }

    public function cadastro(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']); 
            $user = addslashes($_POST['user']);
            $pass = md5($_POST['pass']);
            $cpf = addslashes($_POST['cpf']);
            
            if(!empty($nome) && !empty($user) && !empty($pass) && !empty($cpf)){

                $users = new Usuarios();

                if(!$users->usuarioExiste($user)){
                    $_SESSION['twlg'] = $users->inserirUsuario($nome,$user,$pass,$cpf);
                    header("Location: ".BASE_URL);
                }else{
                    $dados['aviso'] = "Esse usuário ja existe!";
                    $log = new Logs();
                    $log->setLOG($dados['aviso'], "FORM-LOGIN");
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadView('cadastro',$dados);
    }

    public function sair(){
        unset($_SESSION['twlg']);
        header("Location: ".BASE_URL);
    }


}