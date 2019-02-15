<?php

	require_once('db.class.php');

	$produto = $_POST['produto'];
	$valor   = $_POST['valor'];

	$objDb = new db();
	$link  = $objDb->connect_mysql();

	$sql = " insert into produtos (produto, valor) values ('$produto', '$valor')";

	if (mysqli_query($link, $sql)){
		echo 'Produto registrado!';
	}else{
		echo 'Produto não registrado!';
	}
?>