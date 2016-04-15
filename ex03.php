<?php

/* 
Exercício #03:
--------------
É necessário escrever objetos na seguinte forma (apenas um exemplo de saída do programa):
{nomeAluno:"João", disciplina:"IDS-001", notaP1:7, notaP2:5}
Escreva uma classe de forma a obter a saída desejada. */

class Aluno{
    
    protected $nomeAluno;
    protected $disciplina;
    protected $notaP1;
    protected $notaP2;
    
    public function __construct($nomeAluno, $disciplina, $notaP1, $notaP2){
        $this->nomeAluno = $nomeAluno;
        $this->disciplina = $disciplina;
        $this->notaP1 = $notaP1;
        $this->notaP2 = $notaP2;
    }
    
    public function toJSON(){
        //O header não foi pedido, mas coloquei
        header('content-type: application/json');
        echo json_encode($this);
    }
}