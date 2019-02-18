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
			<form method="post" class="form-inline" action ="registra_produto.php" id="cadastro-produto">
				<div class="form-group">
					<h2> Cliente </h2>
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<input class="form-control" name="cliente" placeholder="nome...">
				</div>
				<div class="row">
    			<div class="col-mx-sm-3 mb-2">
					<table class="table">
						<tr class="info">
							<th>Produto</th>
							<th>Valor</th>
						</tr>
					</table>
				</div>
				<div class="form-inline">
					<div class="form-group">
					<h3> Produto </h3>
	    			<input class="form-control" id="produto" required="required" type="text" name="produto" placeholder="produto...">
				</div>
	    		<div class="form-group">
		    		<h3> Valor </h3>
	        		<input class="form-control" type="number" name="valor" placeholder="00.00">
					<button type="button" class="btn btn-primary">Adicionar</button>
        		</div><br><br>
				<div class="">
					<button type="submit" class="btn btn-success">Salvar</button>
					<button type="reset" class="btn btn-danger">Cancelar</button>
				</div>
			</form>
		</div>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</body>
</html>