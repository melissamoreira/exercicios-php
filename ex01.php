<?php

/* 
Exercício #01:
--------------
Um carro usado possui um desconto de 30% em uma loja, um semi-novo 15% e um novo 5% do preço total de uma tabela do mercado.
Implemente esta situção usando os conceitos de programação orientada a objetos.
Justifique todos os conceitos usados para resolver este problema.
OBS.: Não está sendo avaliado o uso do diagrama! */


//Classe Abstrata Carro
abstract class Carro{
    
    protected $valor;
    public function __construct($valor){
        $this->valor=$valor;
    }
    abstract public function desconto();
}

//Classe Usados -- 30% de Desconto
class Usados extends Carro{
    
    public function desconto(){
        $this->valor=$this->valor*0.70;
        // OU: $this->valor = ($this->valor/100)*70;
    }
}

//Classe SemiNovos -- 15% de Desconto
class Seminovos extends Carro{
    
    public function desconto(){
        $this->valor=$this->valor*0.85;
        // OU: $this->valor = ($this->valor/100)*85;
    }
}

//Classe Novos -- 5% de Desconto
class Novos extends Carro{ 
    
    public function desconto(){
        $this->valor=$this->valor*0.95;
        // OU: $this->valor = ($this->valor/100)*95;
        
    }
}


