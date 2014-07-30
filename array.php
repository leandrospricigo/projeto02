<?php
require_once ("cliente.php");

$clientes = array();


for ($i=0; $i<10; $i++)
{

$clientes[$i] = new cliente();
$clientes[$i]->setNome("Leandro".$i);
$clientes[$i]->setCpf("00.000.000-0".$i);
$clientes[$i]->setEndereco("Rua XV de Novembro".$i);
$clientes[$i]->setCidade("Ipumirim, SC");
$clientes[$i]->setTelefone("3438121".$i);
$clientes[$i]->setEmail("cliente".$i."@provedor.com");
    
}

