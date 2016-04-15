<?php

/* 
Exercício #02:
--------------
Para determinado acessoa o painel de administração de um site (método painel()), apenas o Administrador deve ter acesso 
(exibir mensagem de acesso), enquanto um usuário comum não (exibir mensagem de erro).
Faça a classe Sistema (separado do Usuário) que possua o método auth(), cujo retorno é um usuário, que lê os parâmetros 
login e senha via método POST do http e verifica se este é um usuário autorizado ou não.
Para estar autorizado o login deve ser root e a senha root. De acordo com a situação acima.*/


//Interface Usuario
interface Usuario{
    function painel();
}

//Classe Admin 
class Admin implements Usuario{
    public function painel(){
        echo "Painel acessado com Sucesso!";
    }
}

//Classe Comum
class Comum implements Usuario{
    public function painel(){
        echo "ERRO: O acesso ao painel é restrito ao Admin.";
    }
}

class Sistema{
    
    //Auth possui uma referência ao Usuario (retorna um Usuario)
    public function auth(){
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        if ($nome === "root" && $senha === "root"){
            return new Admin();
        } else {
            return new Comum();
        }
        
    }
} 
//Sistema TÊM um Usuário
//Não foi usada Herança porque, com a herança, o método auth() seria herdado pelos dois tipos de Usuarios, o que não é a intenção!


