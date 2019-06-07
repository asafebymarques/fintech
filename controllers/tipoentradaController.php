<?php
class tipoentradaController extends Controller {

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

        $tipoentrada = new TipoEntrada();

        $dados['tipoentradaArray'] = $tipoentrada->getTipoentradas(); 

        $this->loadTemplate('tipoentrada', $dados);
    }

    public function criar(){
        $dados = array(
        );
        
        $this->loadTemplate('tipoentrada_criar', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $descricao = addslashes($_POST['descricao']); 

            if(!empty($descricao)){

                $tipoentrada = new TipoEntrada();

                if(!$tipoentrada->tipoentradaExiste($descricao)){
                    $tipoentrada->inserirTipoentrada($descricao);
                    header("Location: /fintech/tipoentrada");
                }else{
                    $dados['aviso'] = "Esse tipo ja existe ja existe!";
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('tipoentrada_criar',$dados);
    }

    public function editar(){
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $tipoentrada = new TipoEntrada();

            $dados['tipoentradaEdit'] = $tipoentrada->getTipoentrada($id); 
        }

        $this->loadTemplate('tipoentrada_editar', $dados);
    }

    public function atualizar(){

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $id = addslashes($_POST['id']);
            $descricao = addslashes($_POST['descricao']);

            $tipoentrada = new TipoEntrada();

            $tipoentrada->atualizarTipoentrada($descricao,$id);
            
            header("Location: /fintech/tipoentrada");
        }else{
            $dados['aviso'] = "Favor preencher todos os campos!";
        }

        $this->loadTemplate('tipoentrada_editar',$dados);
    }

    public function excluir() {
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $tipoentrada = new TipoEntrada();

            $dados['tipoentradaEdit'] = $tipoentrada->getTipoentrada($id); 
        }

        $this->loadTemplate('tipoentrada_excluir', $dados);
    }

    public function deletar() {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $tipoentrada = new TipoEntrada();

            $tipoentrada->deletarTipoentrada($id);
            
            header("Location: /fintech/tipoentrada");
        }else{
            $dados['aviso'] = "Favor escolher um tipo para excluir, caso o erro persista contate o administrador do sistema!";
        }

        $this->loadTemplate('tipoentrada_excluir',$dados);
    }
}