<?php

require 'Conexao.php';


class Cliente {
    
   private $conexao;
   
   public function __construct(){
       $this->conexao = Conexao::getConexao();
   }
    
   public function listar() {
       $sql = 'select * from cliente;';
       
       $q = $this->conexao->prepare($sql);
       $q->execute();
       
       return $q;
   } 
   
   public function adicionar($nomcli, $endcli, $telcli){
      
       $sql = 'INSERT INTO cliente(nomcli, endcli, telcli) VALUES (?, ?, ?);';
       $q = $this->conexao->prepare($sql);
       
       $q->bindParam(1, $nomcli);
       $q->bindParam(2, $endcli);
       $q->bindParam(3, $telcli);
       
       $q->execute();
   }
   
   public function editar($nomcli, $endcli, $telcli){
      
       $sql = 'update cliente set nomcli = ?, endcli = ?, telcli= ?) where codcli= $codcli';
       $q = $this->conexao->prepare($sql);
       
       $q->bindParam(1, $nomcli);
       $q->bindParam(2, $endcli);
       $q->bindParam(3, $telcli);
       
       $q->execute();
   }
   
   
}
