<?php
class Categoria extends Model{

    public function categoriaExiste($desc){

        $sql = "SELECT * FROM categoria WHERE descricao = '$desc' AND status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function inserirCategoria($desc){
        $sql = "INSERT INTO categoria SET descricao = :desc";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':desc',$desc);
        $sql->execute();
    }

    public function getCategorias(){
        $array = array();
        $sql = "SELECT * FROM categoria WHERE status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getCategoria($id){
        $array = array();
        $sql = "SELECT * FROM categoria WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;
    }

    public function atualizarCategoria($desc,$id){
        $sql = "UPDATE categoria SET descricao = :desc, data_alteracao = :data_alteracao WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':desc',$desc);
        $sql->bindValue(':data_alteracao',date('Y/m/d H:i:s'));
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function deletarCategoria($id){
        $sql = "UPDATE categoria SET status = 0 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}