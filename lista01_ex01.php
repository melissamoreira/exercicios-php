<?php
/*
Exercício#1.1
Dada a classe Pessoa, que possui os atributos: String nome, String sexo, int idade, boolean vegetariana.
Faça agora uma classe Churrasco que possua:
Atributo: qtdCarne(Double)
Método: veificarConsumo() - Recebe via parâmetro uma pessoa e com isso define a consumação média de carne 
(quantidade de carne consumida), pessoas de 0 a 3 anos não consomem, vegetarianos também não.
Pessoas de 4 a 12 anos consomem 1 kilo de carne e de 13 anos em diante, 2 kilos de carne.
*/

class Pessoa{
    //Atributos
    public $nome;
    public $sexo;
    public $idade;
    public $vegetariana;
    //Construtor
    public function __construct($nome, $sexo, $idade, $vegetariana){
        $this->nome=$nome;
        $this->sexo=$sexo;
        $this->idade=$idade;
        $this->vegetariana=$vegetariana;
    }
}

class Churrasco{
    //Atributo
    public $qtdCarne=0;
    
    //Método
    public function verificarConsumo(Pessoa $p){
       
        if($p->idade<4 || $p->vegetariana){
            $this->qtdCarne +=0; 
            //Se tiver até 3 anos ou for vegetariana
        } elseif ($p->idade > 3 &&  $p->idade < 12){
            $this->qtdCarne += 1; 
            // De 4 a 12 anos
        } else {
            $this->qtdCarne = $this->qtdCarne+2; 
            //Acima dos 12 anos
        }
    }
}


$g = new Pessoa("Goku","m",22,false);
$v = new Pessoa("Vegeta","m",23,false);
$b = new Pessoa("Bulma","f",21,true);
$t = new Pessoa("Trunks","m",2,false);


$churrasTop = new Churrasco();
$churrasTop->verificarConsumo($g);
$churrasTop->verificarConsumo($v);
$churrasTop->verificarConsumo($b);
$churrasTop->verificarConsumo($t);

echo("Quantidade de carne do churras top: ".$churrasTop->qtdCarne);
