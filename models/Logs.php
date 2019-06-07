<?php
class Logs extends Model{

    public function setLOG($msg, $rel) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $hora = date('Y-m-d H:i:s'); 
        
        $sql = "INSERT INTO logs SET hora = '$hora', ip = '$ip', relacionamento = '$rel', mensagem = '$msg'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
    }
}