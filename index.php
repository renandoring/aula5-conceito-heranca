<?php 
include_once 'Pessoa.class.php';
include_once 'Aluno.class.php';

$aluno = new Aluno("Renan",31,9999-9999,"Rua XXXX, nº 39",9,5);
$aluno->assistirAula($aluno->nome);

echo "A nota de sua última prova foi ".$aluno->nota."\n";

$aluno->andar();
?>