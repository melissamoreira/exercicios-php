<?php
/*

    Exercicio #08
    Implemente uma classe que modele um jogo de advinhacao de numeros de 0 a 99.
    - atributos: um numero inteiro sorteado.
    - metodos: sortear(), advinhar().
    OSB: O objeto para gerar numero aleatorio no PHP é a funcao rand($min,$max), 
    sendo que queremos um minimo 0 e o maximo 100

*/


class JogoAdivinhacao{
    private $num;

    public function sortear(){
        $this->num = rand(0,100);
    }

    public function adivinhar($x){
        $this->sortear();
        //Operador ternario:
        //A condicao vai entre parenteses
        //O true eh apos o ponto de interrogacao (?)
        //E o else apos os dois pontos (:)
        //FAÇA (CONDICAO) ? ISSO : SENAO_ISSO;
        echo ($this->num == $x)?'Acertou miseravi!':'HAHA, Errou! O numero certo era: '. $this->num;
        //Mais sobre: 
        //  http://php.net/manual/en/language.oop5.static.php
   }       
}

$joguinho = new JogoAdivinhacao();
$joguinho->adivinhar(56);

