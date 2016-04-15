<?php
/*

    Exercicio #10
    Implemente a classe Porta que possua:
    - atributos: isOpen(boolean), numAberturas(int);
    - metodos: abrir(): abre a porta e conta 1 na contagem de aberturas
    - fechar(): fecha a porta. 
    OBS. O atributo numAberturas deve contar o total de aberturas de todas as portas possíveis

*/


class Porta{
    public $isOpen=0;
    public static $numAberturas=0;
    // A static variable exists only in a local function scope, 
    // but it does not lose its value when program execution leaves this scope.
    // O valor da static é mantido de uma execução para a outra.

    public function abrir(){
        if (!$this->isOpen){
            $this->isOpen = true; 
            self::$numAberturas++;
            echo "A porta foi aberta!<br>";
        } else {
            echo "A porta ja esta aberta!<br>";
        }    
        echo "Total de aberturas: ".self::$numAberturas."<br>";
    }

    public function fechar(){
        //FAÇA (CONDICAO) ? ISSO : SENAO_ISSO;
        //A linha abaixo abre ou fecha a porta dependendo de seu estado atual, com o operador ternário
        //$this->isOpen = ($this->isOpen) ? false : true ; 
        //Abaixo, apenas fecha.
        echo ($this->isOpen) ? "A porta foi fechada!<br>" : "A porta ja estava fechada!<br>"; 
        $this->isOpen = false;                
    }  
}

$p1 = new Porta();
$p2 = new Porta();
$p1->abrir();
$p1->abrir();
$p2->abrir();
$p2->fechar();


