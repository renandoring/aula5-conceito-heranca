<?php 
include_once "Pessoa.class.php";

class Aluno extends Pessoa{
	public $nota;

	//Chamando variaveis da classe Pai
	function __construct($nome,$idade,$telefone,$endereco,$nota){
		parent::__construct($nome,$idade,$telefone,$endereco);
		$this->nota = $nota;
	}

	function assistirAula($nome){
		echo $nome. " esta assistindo aula."."\n";
	}

	//Chamando funcao da classe Paiq
	function andar(){
		parent::andar();
	}
}
?>