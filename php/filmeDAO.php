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
     public function add($nome,$genero,$tipo,$roteirista,$caminho,$descricao){
      $sql = $this->pdo->prepare("INSERT INTO filmedado (nome,descricao,genero,roteirista,caminho,tipo) VALUES(:nome,:descricao,:genero,:roteirista,:caminho,:tipo)");
      $sql->bindValue(':nome',$nome);
      $sql->bindValue(':descricao',$descricao);
      $sql->bindValue(':genero',$genero); 
      $sql->bindValue(':roteirista',$roteirista);
      $sql->bindValue(':caminho',$caminho);
      $sql->bindValue(':tipo',$tipo);
      $sql->execute();
      header("Location: edicao.php");
     exit;
     }
     public function delete($id){
         $sql = $this->pdo->prepare("DELETE FROM filmedado WHERE  id=:id");
         $sql->bindValue(":id",$id);
         $sql->execute();
     }
     public function att($identidade,$nome,$genero,$tipo,$roteirista,$caminho,$descricao){
         $sql = $this->pdo->prepare("UPDATE filmedado SET nome = :nome, descricao = :descricao, genero = :genero, roteirista = :roteirista, caminho = :caminho, tipo = :tipo WHERE id = :identidade ");
         $sql->bindValue(':nome',$nome);
         $sql->bindValue(':identidade',$identidade);
         $sql->bindValue(':genero',$genero);
         $sql->bindValue(':tipo',$tipo);
         $sql->bindValue(':roteirista',$roteirista);
         $sql->bindValue(':caminho',$caminho);
         $sql->bindValue(':descricao',$descricao);
         $sql->execute();
         header("Location: edicao.php");
         exit;
     }
     public function search($pesquisa){
      $lista = [];
         $sql = $this->pdo->query("SELECT*FROM filmedado WHERE nome LIKE '%$pesquisa%'");
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
}
