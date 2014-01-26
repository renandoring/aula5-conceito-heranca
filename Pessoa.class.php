<?php 
class Pessoa{
	public $nome;
	public $idade;
	public $telefone;
	public $endereco;

	function __construct($nome,$idade,$telefone,$endereco){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
	}

	public function andar(){
		$this->nome;
		$this->idade;
		$this->telefone;
		$this->endereco;

		echo $this->nome. ", esta andando."."\n";
	}
}

?>