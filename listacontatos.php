<?php

require_once ("array.php");

for($i=0;$i < count($clientes);$i++){
   $obj = $clientes[$i];
    // echo "Nome: {$obj->getNome()}<br/>";
   echo "<a href='detalhescli.php?id=$i'>Nome:{$obj->getNome()}</a><br>";
 }         
