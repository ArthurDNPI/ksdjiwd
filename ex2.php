<?php
class Animal{
  public $nome;
  public $idade;
  public $som;
  public $acao;
}
Class Cachorro extends Animal{
  public function Cachorro($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "correr";

  }
}
Class Cavalo extends Animal{
   public function Cavalo($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "correr";

  }
}
Class Preguica extends Animal{
  public function Preguica($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "subir em arvore";
  }
}
?>
--Arthur Chaves; Mateus Legramante--