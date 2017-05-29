<?php

// Includs client to get $client object
include 'lib/client.php';

$id = $_GET['id']; // id from url

/**
* Calling the "delete" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: $id
*/
if( $client->__soapCall("delete", array($id)) ){
	$message = "Dados excluidos com sucesso.";
}else {
	$message = "Desculpe, Não é possivel excluir.";
}

echo $message;
?>
<a href="read.php">Voltar a Lista</a>