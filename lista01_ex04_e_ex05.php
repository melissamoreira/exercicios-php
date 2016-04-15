<?php
/*

    Exercicio #04
    Implemente a classe Cliente que possua os atributos nome, saldo e limite. 
    Essa deve possuir também os métodos sacar(), depositar(), checarSaldo() e obterNome().
    Sabe-se que é possível sacar se o saldo+limite forem superiores a quantia. Os métodos 
    depositar() e sacar() necessitam de parametros. O metodo checarSaldo() deve retornar o valor 
    saldo+limite. O metodo obterNome() deve retornar o nome do cliente.
*/

class Cliente{
    private $nome;
    public $saldo;
    public $limite;

    public function __construct($nome, $saldo, $limite){
        $this->nome=$nome;
        $this->saldo=$saldo;
        $this->limite=$limite;
    }

    //Metodo Obter Nome
    public function obterNome(){
        return $this->nome;
    }

    //Metodo Depositar
    public function depositar($x){
        $this->saldo += $x; //+= Pega o saldo atual e soma $x
        return "O valor de $x foi depositado com sucesso!";
    }

    //Supondo que 'limite' seja um valor de crédito especial para saque
    //Metodo Sacar
    public function sacar($x){
        if(($this->saldo + $this->limite) >$x ){
            $this->saldo -= $x;
            return "O valor $x foi sacado.";            
        } else {
            return "Nao eh possivel sacar essa quantia!";
        }    
    }

    //Metodo Checar Saldo
    public function checarSaldo(){
        return $this->saldo + $this->limite;
    }
}

$pessoa = new Cliente ("Vegeta",5000,1200);
echo $pessoa->checarSaldo()."<br>";
echo $pessoa->obterNome()."<br>";
echo $pessoa->depositar(3000)."<br>";
echo $pessoa->checarSaldo()."<br>";
echo $pessoa->sacar(11000)."<br>";
echo $pessoa->checarSaldo()."<br>";
echo $pessoa->sacar(9199)."<br>";
echo $pessoa->checarSaldo()."<br>";


/*

    Exercicio #05
    Implemente a classe Doc que possuí o método transferir() que recebe via parâmetro dois 
    Clientes c1 e c2 (ver exercício 1.4) e a quantia (necessita uma verificação de saldo). 
    Deve ser tirado da conta de c2 e colocado na conta de c1, exiba também uma mensagem de 
    conclusão de transferência explicitando os nomes dos envolvidos.

*/

class Doc{

    public function transferir(Cliente $c1, Cliente $c2, $quantia){
        if($c2->saldo >= $quantia){
            $c2->sacar($quantia);
            $c1->depositar($quantia);
            echo "Foi realizada a transferencia no valor de $".$quantia." do cliente".$c2->obterNome()." 
            para o cliente ".$c1->obterNome().".<br>";
        } else {
            echo "Não foi possivel realizar a transferencia!<br>";
        }
    }
}

//Testando
$c1 = new Cliente("Goku",5000,1500);
$c2 = new Cliente("Vegeta",5000,1500);
$doc = new Doc();
$doc->transferir($c1,$c2,2500);
echo $c1->checarSaldo()."<br>";
echo $c2->checarSaldo()."<br>";

