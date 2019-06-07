<?php
class Financa extends Model{

    public function inserirFinanca($tipoentradafk,$descricao,$categoriafk,$data_debito, $valor){
        $sql = "INSERT INTO financas SET tipoentradafk = :tipoentradafk , descricao = :descricao, categoriafk = :categoriafk, data_debito = :data_debito, valor = :valor";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':tipoentradafk',$tipoentradafk);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':categoriafk',$categoriafk);
        $sql->bindValue(':data_debito',$data_debito);
        $sql->bindValue(':valor',$valor);
        $sql->execute();
    }

    public function getFinancas(){
        $array = array();
        $sql = "SELECT F.*, TE.descricao as tipo, C.descricao as cat FROM `financas` F INNER JOIN tipoentrada TE ON (F.tipoentradafk = TE.id) INNER JOIN categoria C ON(C.id = F.categoriafk) WHERE F.status =1";
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getFinanca($id){
        $array = array();
        $sql = "SELECT F.*, TE.descricao as tipo, C.descricao as cat FROM `financas` F INNER JOIN tipoentrada TE ON (F.tipoentradafk = TE.id) INNER JOIN categoria C ON(C.id = F.categoriafk) WHERE F.status =1 AND F.id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;
    }

    public function atualizarFinanca($tipoentradafk,$descricao,$categoriafk,$data_debito, $valor,$id){
        $sql = "UPDATE financas SET tipoentradafk = :tipoentradafk , descricao = :descricao, categoriafk = :categoriafk, data_debito = :data_debito, valor = :valor, data_alteracao = :data_alteracao WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':tipoentradafk',$tipoentradafk);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':categoriafk',$categoriafk);
        $sql->bindValue(':data_debito',$data_debito);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':data_alteracao',date('Y/m/d H:i:s'));
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function deletarFinanca($id){
        $sql = "UPDATE financas SET status = 0 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}