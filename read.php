<?php
// Includs client to get $client object
include 'lib/client.php';

/**
* Calling the "getAll" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: null
*/
$result = $client->__soapCall("getAll", array());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista Dados</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="create.php">Criar Novo</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Nome</td>
				<td>Email</td>
				<td>Endereço</td>
				<td>Ação</td>
			</tr>
			<?php foreach($result as $row) {?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['address'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['id'];?>">Editar</a> | 
					<a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Deseja Excluir?');">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>