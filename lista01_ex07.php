<?php
/*

    Exercicio #07
    Implemente a classe Cliente que contenha os atributos:
    nome, cpf (Strings) e telefone (Telefone).
    E que contenha os metodos: mostrarDados() e adicionarTelefone(), o primeiro
    deve mostrar todos os dados do cliente, incluindo o telefone e o ultimo
    deve associar um novo telefone ao cliente. Implemente a class Telefone que possua os 
    atributos: ddd e numero (Strings) e os metodos: obterNumero() e obterDDD();

*/

class Telefone{
    private $ddd;
    private $numero;

    public function __construct($ddd, $numero){
        $this->ddd=$ddd;
        $this->numero=$numero;
    }

    public function  obterNumero(){
        return $this->numero;
    }

    public function obterDDD(){
        return $this->ddd;
    }
}

class Cliente{
    private $nome;
    private $cpf;
    private $telefone;

    public function __construct($nome, $cpf, Telefone $telefone){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->telefone=$telefone;
    }

    public function mostrarDados(){
        echo "Nome: ".$this->nome."<br>";
        echo "CPF: ".$this->cpf."<br>";
        echo "Telefone: (".$this->telefone->obterDDD().") ".$this->telefone->obterNumero()."<br>";
    }

    public function adicionarTelefone(Telefone $tel){
        $this->telefone = $tel;
    }
}

//Testando
$b =  new Cliente("Bulma","38799918654", new Telefone(13,"99123-4567"));
$b->mostrarDados();
$b->adicionarTelefone(new Telefone(13,"12345-6789"));
$b->mostrarDados();
