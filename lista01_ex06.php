<?php
/*

    Exercicio #06
    Implementente uma classe que modele um triangulo equilátero (lados iguais)
    - atributos: lado, perimetro, area
    - metodos: calcArea(), calcPerimetro() e seus gets. o lado devera ser o unico atributo 
    inicializado via construtor.
    Formulas:
    - area = lado * ( raiz(3) / 2 )
    - perimetro = 3*lado

*/


class TrianguloEqui{
    private $lado;
    private $perimetro;
    private $area;

    public function __construct($lado){
        $this->lado=$lado;
    }

    public function calcArea(){
        $this->area = $this->lado*(sqrt(3)/2);
    }

    public function getArea(){
        return $this->area;
    }

    public function calcPerimetro(){
        $this->perimetro = $this->lado * 3;
    }

    public function getPerimetro(){
        return $this->perimetro;
    }
}    

$t1 = new TrianguloEqui(20);
$t1->calcArea();
$t1->calcPerimetro();
echo $t1->getArea()."<br>";
echo $t1->getPerimetro()."<br>";


