<?php

class Veterinario{
  public $ver;
  public function examina($a){
    echo "examinando $a \n";
    $this->ver=true;
   
  }
}
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
   public function Cavalo($nome,$idade,$somj){
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
$ex = new Veterinario;
$a1= new Cachorro("melissa","1 ano","latir");
$ex->examina($a1->nome);
 if ($ex->ver == true){
   $a1->setSom();
 }
$a2= new Cavalo("reinaldo","14 anos","relinchar");
$ex->examina($a2->nome);
 if ($ex->ver == true){
   $a2->setSom();}
$a3= new Preguica("amaral","23 anos","balir");
$ex->examina($a3->nome);
 if ($ex->ver == true){
   $a3->setSom();}
?>
--Arthur Chaves; Mateus Legramante--