<?php

	require_once('db.class.php');

	$produto = $_POST['produto'];
	$valor   = $_POST['valor'];
	$cliente = $_POST['cliente'];

	$objDb = new db();
	$link  = $objDb->connect_mysql();

	$sqlRegistra = " insert into produtos (produto, valor, cliente) values ('$produto', '$valor', '$cliente')";

	if (mysqli_query($link, $sqlRegistra)){
		echo "Produto $produto registrado no valor de $valor para o cliente $cliente";
	}else{
		echo 'Produto não registrado!';
	}
?>