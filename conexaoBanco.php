<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'loja';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
$select = "SELECT * FROM cadastro JOIN cidade ON cadastro.cod_cidade=cidade.id_cidade JOIN estado ON cidade.cod_estado=estado.id_estado";
$query = mysqli_query($mysqli,$select);

while($linha=mysqli_fetch_array($query)){
	echo'<pre>';
	print_r($linha);
	echo'</pre>';
	
	echo "<br /><br />";

}

?>

