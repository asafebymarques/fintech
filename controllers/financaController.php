<?php
class financaController extends Controller {

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

        $financa = new Financa();
        $dados['financaArray'] = $financa->getFinancas();

        $this->loadTemplate('financa', $dados);
    }

    
    public function criar(){
        $dados = array(
        );

        $categoria = new Categoria();
        $dados['categoriaArray'] = $categoria->getCategorias(); 

        $tipoentrada = new TipoEntrada();
        $dados['tipoentradaArray'] = $tipoentrada->getTipoentradas(); 
        
        $this->loadTemplate('financa_criar', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $tipoentradafk = addslashes($_POST['tipoentrada']);
            $descricao = addslashes($_POST['descricao']); 
            $categoriafk = addslashes($_POST['categoria']);
            $data_debito = addslashes($_POST['data_debito']);
            $valor = addslashes($_POST['valor']);
            
            if(!empty($tipoentradafk) && !empty($descricao) && !empty($categoriafk) && !empty($data_debito) && !empty($valor)){

                $financa = new Financa();
                $financa->inserirFinanca($tipoentradafk,$descricao,$categoriafk,$data_debito, $valor);
                header("Location: /fintech/financa");


            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('financa_criar',$dados);
    }

    public function editar(){
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $financa = new Financa();
            $dados['financaEdit'] = $financa->getFinanca($id);
            
            $categoria = new Categoria();
            $dados['categoriaArray'] = $categoria->getCategorias(); 
    
            $tipoentrada = new TipoEntrada();
            $dados['tipoentradaArray'] = $tipoentrada->getTipoentradas(); 
        }

        $this->loadTemplate('financa_editar', $dados);
    }

    public function atualizar(){
        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $id = addslashes($_POST['id']);
            $tipoentradafk = addslashes($_POST['tipoentrada']);
            $descricao = addslashes($_POST['descricao']); 
            $categoriafk = addslashes($_POST['categoria']);
            $data_debito = addslashes($_POST['data_debito']);
            $valor = addslashes($_POST['valor']);

            $financa = new Financa();

            $financa->atualizarFinanca($tipoentradafk,$descricao,$categoriafk,$data_debito, $valor,$id);
            
            header("Location: /fintech/financa");
        }else{
            $dados['aviso'] = "Favor preencher todos os campos!";
        }

        $this->loadTemplate('financa_editar',$dados);
    }

    public function excluir() {
        $dados = array(
        );

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET['id']);

            $financa = new Financa();

            $dados['financaEdit'] = $financa->getFinanca($id); 
        }

        $this->loadTemplate('financa_excluir', $dados);
    }

    public function deletar() {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $financa = new Financa();

            $financa->deletarFinanca($id);
            
            header("Location: /fintech/financa");
        }else{
            $dados['aviso'] = "Favor escolher uma finança para excluir, caso o erro persista contate o administrador do sistema!";
        }

        $this->loadTemplate('financa_excluir',$dados);
    }
}