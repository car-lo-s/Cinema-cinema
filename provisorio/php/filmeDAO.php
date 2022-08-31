<?php
require_once 'config.php';
require_once 'filme.php';
class filmeDAO{
    private $pdo;

     public function __construct(PDO $driver){
        $this->pdo = $driver;
     }
     public function listar(){
      $lista = [];
      $sql = $this->pdo->query("SELECT*FROM filmedado");
      if($sql->rowCount()>0){
         $data = $sql->fetchAll();
         foreach ($data as $item) {
            $filme = new filme();
            $filme->setid($item['id']);
            $filme->setnome($item['nome']);
            $filme->setdescricao($item['descricao']);
            $filme->setgenero($item['genero']);
            $filme->setroteirista($item['roteirista']);
            $filme->setcaminho($item['caminho']);
            $filme->settipo($item['tipo']);
            $lista[] = $filme;
         }
      }
      return $lista;
     }
     public function add(){
      echo "entrou ";
     }
}
