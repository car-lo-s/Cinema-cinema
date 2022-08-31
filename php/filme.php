<?php
class filme{
    
    private $id;
    private $nome;
    private $descricao;
    private $genero;
    private $roteirista;
    private $caminho;
    private $tipo;

        public function getid(){
            return $this->id;
        }
        public function setid($id){
            $this->id = $id;
        }

        public function getnome(){
            return $this->nome;
        }
        public function setnome($nome){
            $this->nome = $nome;
        }

        public function getdescricao(){
            return $this->descricao;
        }
        public function setdescricao($descricao){
            $this->descricao = $descricao;
        }
        

        public function getgenero(){
            return $this->genero;
        }
        public function setgenero($genero){
            $this->genero = $genero;
        }
        public function getroteirista(){
            return $this->roteirista;
        }
        public function setroteirista($roteirista){
            $this->roteirista = $roteirista;
        }
        public function getcaminho(){
            return $this->caminho;
        }
        public function setcaminho($caminho){
            $this->caminho = $caminho;
        }
        public function gettipo(){
            return $this->tipo;
        }
        public function settipo($tipo){
            $this->tipo = $tipo;
        }
}