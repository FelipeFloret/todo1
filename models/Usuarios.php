<?php
require_once("../ClassConexao.php");
require_once("../lipe.php");

class Usuarios{

	private $id;
	private $nome;
	private $telefone;
	private $email;
	private $senha;

	#Método Construtor
	public function __construct($nome,$telefone,$email,$senha){
		$this->id=0;
		$this->nome=$nome;
		$this->telefone=$telefone;
		$this->email=$email;
		$this->senha=$senha;

		
	}

	#Método de Inserção
	public function InserirDB(){
		/*$Crud=$this->Conectar()->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?");
		$Crud->bindParam(1,$this->Id,PDO::PARAM_INT);
		$Crud->bindParam(2,$this->Nome,PDO::PARAM_STR);
		$Crud->bindParam(3,$this->Telefone,PDO::PARAM_STR);
        $Crud->bindParam(4,$this->Email,PDO::PARAM_STR);
      	$Crud->bindParam(5,$this->Senha,PDO::PARAM_STR);
        $Crud->execute();*/

        $sql = "INSERT INTO usuarios SET nome = '$this->nome', telefone = '$this->telefone' " ;
      	echo $this->uva;
      	//echo $frase;
      	echo 'teste';
       // $pdo->query($sql);
        
	}
}