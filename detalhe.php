<tbody>
	<?php
        require_once('db.class.php');
        
		$objDb = new db();
		$link  = $objDb->connect_mysql();
		$result = mysqli_query($link, "SELECT * FROM produtos WHERE Cliente LIKE \'Nicholas\'");

		
	?>
        <h2>Cliente : <?php echo $row['Cliente']; ?>
		<tr>
			<td> <?php echo $row['Produto']; ?> </td>
		    <td> <?php echo $row['Valor']; ?> </td>
		</tr>
		
</tbody>