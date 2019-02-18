<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trabalho 1</title>
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script>
			// código javascript						
		</script>

	</head>
		<body>
			<div class="col-mx-sm-3 mb-2">	
				<table class="table">
					<thead>
						<tr class="info">
							<th>ID</th>
							<th>Cliente</th>
							<th>Total</th>
						</tr>
					</thead>
			</div>
				<tbody>
					<?php
						require_once('db.class.php');

						$objDb = new db();
						$link  = $objDb->connect_mysql();
						$result = mysqli_query($link, "SELECT * FROM produtos");

						while ($row = mysqli_fetch_assoc($result)):
					?>
					<tr>
						<td> <?php echo $row['id']; ?> </td>
						<td> <?php echo $row['Cliente']; ?> </td>
						<td> <?php echo $row['Total Venda']; ?> </td>
					</tr>
						<?php endwhile; ?>
				</tbody>
			</table>
		</body>
</html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


