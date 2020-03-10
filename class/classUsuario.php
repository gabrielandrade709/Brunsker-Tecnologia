
<?php

class classUsuario {

    //-- Propriedades privadas
    private $nomeCompleto;
    private $apelido;
    private $cpf;
    private $sexo;
    private $nascimento;
    private $estado;
    private $email;
    private $cidade;
    private $cep;
    private $telefone;
    private $celular;
    private $usuario;
    private $senha;
    private $arquivo;

    //-- Encapsulamento das propriedades (Método GET e SET)

    //-- Métodos GET
    function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    function getApelido()
    {
        return $this->apelido;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getSexo()
    {
        return $this->sexo;
    }

    function getNascimento()
    {
        return $this->nascimento;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function getCep()
    {
        return $this->cep;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function getCelular()
    {
        return $this->celular;
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getArquivo()
    {
        return $this->arquivo;
    }

    //-- Métodos SET
    function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    function setApelido($apelido)
    {
        $this->apelido = $apelido;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    function setNascimento($nascimento)
    {
        $this->nascimento= $nascimento;
    }

    function setEstado($estado)
    {
        $this->estado = $estado;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    function setCep($cep)
    {
        $this->cep = $cep;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function setCelular($celular)
    {
        $this->celular = $celular;
    }

    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    //-------------- CRUD-----------------------


    public function retUsuario()
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdBrunSker");
        $tableUsuario = $objConexao->selecionarDados("Select * from Usuario");

        return $tableUsuario;
    }

    public function inserirUsuario($objUsuario)
    {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdBrunSker");

        $nomeCompleto = $objUsuario->getNomeCompleto();
        $apelido = $objUsuario->getApelido();
        $cpf = $objUsuario->getCpf();
        $sexo = $objUsuario->getSexo();
        $nascimento = $objUsuario->getNascimento();
        $estado = $objUsuario->getEstado();
        $email = $objUsuario->getEmail();
        $cidade = $objUsuario->getCidade();
        $cep = $objUsuario->getCep();
        $telefone = $objUsuario->getTelefone();
        $celular = $objUsuario->getCelular();
        $usuario = $objUsuario->getUsuario();
        $senha = $objUsuario->getSenha();

        $objConexao->exercutarComandoSQL("INSERT INTO Usuario VALUES ('$nomeCompleto','$apelido','$cpf','$sexo','$nascimento','$estado','$email','$cidade','$cep','$telefone',$celular,'$usuario','$senha' )");

        return true;
    }

    
    public function logar($objUsu){
        require_once ('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "bdBrunSker");
        
        $nome = $objUsu->getUsuario();
        $senha = $objUsu->getSenha();
        
        $tableUsu = $objConexao->selecionarDados("SELECT * FROM Usuario WHERE usuario = '$usuario' AND senha = '$senha'");
        
        return $tableUsu;
    }

    //-------------- OUTROS MÉTODOS -----------------------
}
