<?php

require_once ("array.php");

$codigo = $_GET['id'];

echo "Nome: ".$clientes[$codigo]->getNome()."<br>";
echo "CPF: ".$clientes[$codigo]->getCpf()."<br>";
echo "Endereço: ".$clientes[$codigo]->getEndereco()."<br>";
echo "Cidade: ".$clientes[$codigo]->getCidade()."<br>";
echo "Telefone: ".$clientes[$codigo]->getTelefone()."<br>";
echo "E-mail: ".$clientes[$codigo]->getEmail()."<br>";

?>

<a href="index.php">Voltar para Index</a>
