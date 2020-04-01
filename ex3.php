<?php
class Animal{
  public $nome;
  public $idade;
  public $som;
  public $acao;

  public function setSom(){
    echo "{$this->nome} {$this->som}\n";
  }
}
Class Cachorro extends Animal{
  public function Cachorro($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "correr";
}}
Class Cavalo extends Animal{
   public function Cavalo($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "correr";
}}
Class Preguica extends Animal{
  public function Preguica($nome,$idade,$som){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->som = $som;
    $this->acao= "subir em arvore";
}}
$animal1= new Cachorro("melissa","1 ano","latir");
$animal1->setSom();
$animal2= new Cavalo("reinaldo","14 anos","relinchar");
$animal2->setSom();
$animal3= new Preguica("amaral","23 anos","balir");
$animal3->setSom();
?>
--Arthur Chaves; Mateus Legramante--