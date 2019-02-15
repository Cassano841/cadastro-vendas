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
		<div class="container">
			<form class="form-inline" action="" id="pesquisa-venda">
				<div class="form-group mb-3">
					<h2> Cliente </h2>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<input class="form-control" placeholder="nome...">
				</div>
			</form><br>

  			<div class="row">
    			<div class="col-md-4">
					<table class="table">
						<tr class="info">
							<th>Produto</th>
							<th>Valor</th>
						</tr>
					</table>
				</div>
			<form method="post" action ="registra_produto.php" id="cadastro-produto">
				<div class="form-inline">
					<div class="form-group">
					<h3> Produto </h3>
	    			<input class="form-control" id="produto" required="required" type="text" name="produto" placeholder="produto...">
				</div>
	    		<div class="form-group">
		    		<h3> Valor </h3>
	        		<input class="form-control" type="number" name="valor" placeholder="00.00">
					<button type="submit" class="btn btn-primary">Adicionar</button>
        		</div>
			</form><br>
			<button type="submit" class="btn btn-default">Salvar</button>
			<button type="submit" class="btn btn-warning">Cancelar</button>
		</div>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</body>
</html>