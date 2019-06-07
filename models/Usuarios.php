<?php
class Usuarios extends Model{

    private $uid;

    public function __construct($id = ''){
        parent::__construct();

        if(!empty($id)){
            $this->uid = $id;
        }

        date_default_timezone_set('America/Sao_Paulo');
    }

    public function isLogged(){
        if(isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])){
            return true;
        }else{
            return false;
        }
    }

    public function usuarioExiste($user){

        $sql = "SELECT * FROM usuarios WHERE user = '$user'";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function inserirUsuario($nome,$user,$pass,$cpf){
        $sql = "INSERT INTO usuarios SET nome = :nome , user = :user, pass = :pass, cpf = :cpf";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':user',$user);
        $sql->bindValue(':pass',$pass);
        $sql->bindValue(':cpf',$cpf);
        $sql->execute();
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function inserirUsuarioa($nome,$user,$pass,$cpf){
        $sql = "INSERT INTO usuarios SET nome = :nome , user = :user, pass = :pass, cpf = :cpf";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':user',$user);
        $sql->bindValue(':pass',$pass);
        $sql->bindValue(':cpf',$cpf);
        $sql->execute();
    }

    public function fazerLogin($user,$pass){
        $sql = "SELECT * FROM usuarios WHERE user = :user AND pass = :pass AND status = 1";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':user',$user);
        $sql->bindValue(':pass',$pass);
        $sql->execute();

        if($sql->rowCount()>0){
            $sql = $sql->fetch();
            $_SESSION['twlg'] = $sql['id'];
            return true;
        }else{
            return false;
        }
    }

    public function getNome(){
        if(!empty($this->uid)){
            $sql = "SELECT nome FROM usuarios WHERE id = '".($this->uid)."'";

            $sql = $this->db->query($sql);

            if($sql->rowCount()>0){
                $sql = $sql->fetch();
                return $sql['nome'];
            }
            
        }
    }

    public function usuarioIdExiste($id) {

        $sql = "SELECT * FROM usuarios WHERE $id = '$id'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsuarios(){
        $array = array();
        $sql = "SELECT * FROM usuarios WHERE status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getUsuario($id){
        $array = array();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;
    }

    public function atualizarUsuario($nome,$user,$pass,$cpf,$id){
        $sql = "UPDATE usuarios SET nome = :nome , user = :user, pass = :pass, cpf = :cpf, data_alteracao = :data_alteracao WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':user',$user);
        $sql->bindValue(':pass',$pass);
        $sql->bindValue(':cpf',$cpf);
        $sql->bindValue(':data_alteracao',date('Y/m/d H:i:s'));
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function deletarUsuario($id){
        $sql = "UPDATE usuarios SET status = 0 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}