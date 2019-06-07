<?php
class TipoEntrada extends Model{

    public function tipoentradaExiste($desc){

        $sql = "SELECT * FROM tipoentrada WHERE descricao = '$desc' AND status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function inserirTipoentrada($desc){
        $sql = "INSERT INTO tipoentrada SET descricao = :desc";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':desc',$desc);
        $sql->execute();
    }

    public function getTipoentradas(){
        $array = array();
        $sql = "SELECT * FROM tipoentrada WHERE status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getTipoentrada($id){
        $array = array();
        $sql = "SELECT * FROM tipoentrada WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;
    }

    public function atualizarTipoentrada($desc,$id){
        $sql = "UPDATE tipoentrada SET descricao = :desc, data_alteracao = :data_alteracao WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':desc',$desc);
        $sql->bindValue(':data_alteracao',date('Y/m/d H:i:s'));
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function deletarTipoentrada($id){
        $sql = "UPDATE tipoentrada SET status = 0 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}