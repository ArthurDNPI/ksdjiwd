<?php
class Veiculo{
  public $modelo;
  public $velocidade;
  public $passageiros;
  public $combustivel;
}

class Carro extends Veiculo{
public $portas;
public $ano;

public function Carro($m,$vel,$pass,$comb,$por,$an){
  $this->modelo = $modelo;
  $this->velocidade = $velocidade;
  $this->passageiros = $passageiro;
  $this->combustivel = $combustivel;
  $this->portas = $portas;
  $this->ano = $ano;
}
}
class Aviao extends Veiculo{
public $uso;
public $tipo;

public function aviao($m,$vel,$pass,$comb,$us,$tp){
  $this->modelo = $modelo;
  $this->velocidade = $velocidade;
  $this->passageiros = $passageiro;
  $this->combustivel = $combustivel;
  $this->uso = $us;
  $this->tipo = $tp;
}}
$carro1 = new Carro("fiesta","120 KM/h",5,"51 litros",2,2014);
$carro2 = new Carro("fusion","180 KM/h",5,"74 litros",4,2019);
print_r ($carro1);
print_r ($carro2);
$aviao1 = new Aviao("Phenom 300","935 KM/h",10,"12000 litros","executivo","Aeronave de uso executivo");
$aviao2 = new Aviao("Antonov AN-225","850 KM/h",930,"32.000 litros","transporte","aeronave de transporte cargueiro estratégico");
print_r ($aviao1);
print_r ($aviao2);
?>
--Arthur Chaves; Mateus Legramante--