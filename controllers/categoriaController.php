<?php
class categoriaController extends Controller {

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

        $categoria = new Categoria();

        $dados['categoriaArray'] = $categoria->getCategorias(); 

        $this->loadTemplate('categoria', $dados);
    }

    public function criar(){
        $dados = array(
        );
        
        $this->loadTemplate('categoria_criar', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $descricao = addslashes($_POST['descricao']); 

            if(!empty($descricao)){

                $categoria = new Categoria();

                if(!$categoria->categoriaExiste($descricao)){
                    $categoria->inserirCategoria($descricao);
                    header("Location: /fintech/categoria");
                }else{
                    $dados['aviso'] = "Essa categoria ja existe ja existe!";
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('categoria_criar',$dados);
    }

    public function editar(){
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $categoria = new Categoria();

            $dados['categoriaEdit'] = $categoria->getCategoria($id); 
        }

        $this->loadTemplate('categoria_editar', $dados);
    }

    public function atualizar(){

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $id = addslashes($_POST['id']);
            $descricao = addslashes($_POST['descricao']);

            $categoria = new Categoria();

            $categoria->atualizarCategoria($descricao,$id);
            
            header("Location: /fintech/categoria");
        }else{
            $dados['aviso'] = "Favor preencher todos os campos!";
        }

        $this->loadTemplate('categoria_editar',$dados);
    }

    public function excluir() {
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $categoria = new Categoria();

            $dados['categoriaEdit'] = $categoria->getCategoria($id); 
        }

        $this->loadTemplate('categoria_excluir', $dados);
    }

    public function deletar() {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $categoria = new Categoria();

            $categoria->deletarCategoria($id);
            
            header("Location: /fintech/categoria");
        }else{
            $dados['aviso'] = "Favor escolher uma categoria para excluir, caso o erro persista contate o administrador do sistema!";
        }

        $this->loadTemplate('categoria_excluir',$dados);
    }
}