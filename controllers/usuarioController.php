<?php
class usuarioController extends Controller {

    public function __construct(){
        parent::__construct();

        $user = new Usuarios();

        if(!$user->isLogged()){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index() {
        $dados = array(
        );

        $user = new Usuarios($_SESSION['twlg']);

        $dados['usuarioArray'] = $user->getUsuarios(); 

        $this->loadTemplate('usuario', $dados);
    }

    
    public function criar(){
        $dados = array(
        );
        
        $this->loadTemplate('usuario_criar', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']); 
            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);
            $cpf = addslashes($_POST['cpf']);
            
            if(!empty($nome) && !empty($user) && !empty($pass) && !empty($cpf)){

                $users = new Usuarios();

                if(!$users->usuarioExiste($user)){
                    $users->inserirUsuarioa($nome,$user,$pass,$cpf);
                    header("Location: /fintech/usuario");
                }else{
                    $dados['aviso'] = "Esse usuário ja existe!";
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('usuario_criar',$dados);
    }

    public function editar(){
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $user = new Usuarios($_SESSION['twlg']);

            $dados['usuarioEdit'] = $user->getUsuario($id); 
        }

        $this->loadTemplate('usuario_editar', $dados);
    }

    public function atualizar(){

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $id = addslashes($_POST['id']);
            $nome = addslashes($_POST['nome']);
            $cpf = addslashes($_POST['cpf']);
            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);

            $users = new Usuarios($_SESSION['twlg']);

            $users->atualizarUsuario($nome,$user,$pass,$cpf,$id);
            
            header("Location: /fintech/usuario");
        }else{
            $dados['aviso'] = "Favor preencher todos os campos!";
        }

        $this->loadTemplate('usuario_editar',$dados);
    }

    public function excluir() {
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $user = new Usuarios($_SESSION['twlg']);

            $dados['usuarioEdit'] = $user->getUsuario($id); 
        }

        $this->loadTemplate('usuario_excluir', $dados);
    }

    public function deletar() {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $users = new Usuarios($_SESSION['twlg']);

            $users->deletarUsuario($id);
            
            header("Location: /fintech/usuario");
        }else{
            $dados['aviso'] = "Favor escolher um usuário para excluir, caso o erro persista contate o administrador do sistema!";
        }

        $this->loadTemplate('usuario_excluir',$dados);
    }
}